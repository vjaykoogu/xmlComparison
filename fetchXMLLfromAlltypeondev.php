<?php

// Array of sitemap URLs to fetch
$sitemap_urls = [
    'https://dev.pruftechnik.com/post-sitemap.xml',
    'https://dev.pruftechnik.com/page-sitemap.xml',
    'https://dev.pruftechnik.com/product-sitemap.xml'
];

// Output file name
$output_file = 'sitemap_urls.txt';

// Function to fetch and process sitemaps
function fetchAndSaveUrls($sitemap_urls, $output_file) {
    $all_urls = [];
    
    // Initialize cURL with cookie handling
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt'); // Store cookies
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');  // Save cookies
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'); // Mimic a browser
    
    foreach ($sitemap_urls as $sitemap_url) {
        echo "Fetching: $sitemap_url\n";
        
        // Set URL and fetch content
        curl_setopt($ch, CURLOPT_URL, $sitemap_url);
        $response = curl_exec($ch);
        
        if ($response === false) {
            echo "cURL Error: " . curl_error($ch) . "\n";
            continue;
        }
        
        // Get HTTP status code and content type
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        echo "HTTP Status Code: $http_code\n";
        echo "Content-Type: $content_type\n";
        
        // Split headers and body
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headers = substr($response, 0, $header_size);
        $body = substr($response, $header_size);
        
        // Debug: Show first 200 characters
        echo "Response preview: " . substr($body, 0, 200) . "...\n";
        
        if ($http_code == 403) {
            echo "Received 403 Forbidden -可能 Cloudflare protection\n";
            // Optional: Add delay and retry
            sleep(5); // Wait 5 seconds
            $response = curl_exec($ch); // Retry
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            echo "Retry HTTP Status Code: $http_code\n";
        }
        
        if ($http_code != 200) {
            echo "Error: Received HTTP $http_code instead of 200\n";
            continue;
        }
        
        if (stripos($content_type, 'xml') === false) {
            echo "Error: Response is not XML\n";
            continue;
        }
        
        // Parse XML
        try {
            $xml = new SimpleXMLElement($body);
            foreach ($xml->url as $url) {
                $loc = (string)$url->loc;
                if (!empty($loc)) {
                    $all_urls[] = $loc;
                }
            }
            echo "Found " . count($xml->url) . " URLs in $sitemap_url\n";
        } catch (Exception $e) {
            echo "XML Parsing Error: " . $e->getMessage() . "\n";
            continue;
        }
    }
    
    curl_close($ch);
    
    if (empty($all_urls)) {
        echo "No URLs found in any sitemap!\n";
        return [];
    }
    
    // Remove duplicates and sort
    $all_urls = array_unique($all_urls);
    sort($all_urls);
    
    // Save to file
    $content = implode("\n", $all_urls);
    $bytes_written = file_put_contents($output_file, $content);
    
    if ($bytes_written === false) {
        echo "Error writing to file $output_file\n";
    } else {
        echo "Successfully saved " . count($all_urls) . " URLs to $output_file\n";
    }
    
    return $all_urls;
}

// Execute the function
$urls = fetchAndSaveUrls($sitemap_urls, $output_file);

if (!empty($urls)) {
    echo "\nFound URLs:\n";
    echo str_repeat("=", 50) . "\n";
    foreach ($urls as $url) {
        echo "$url\n";
    }
}

?>