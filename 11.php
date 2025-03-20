<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;

$inputFileName = 'sitemaps_all.xlsx';

try {
    $spreadsheet = IOFactory::load($inputFileName);
    $sheet = $spreadsheet->getActiveSheet();

    $urlsWithHtml = [];
    $urlsWithoutHtml = [];
    $urlsWithIndexHtml = [];

    // Correct column indexes based on printed headers
    $addressIndex = 0;      // "Address"
    $contentTypeIndex = 1;  // "Content Type"
    $statusIndex = 2;       // "Status Code"

    // Process each row, starting from row 2
    foreach ($sheet->getRowIterator(2) as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);

        $rowData = [];
        foreach ($cellIterator as $cell) {
            $value = $cell->getValue();
            $rowData[] = is_null($value) ? '' : trim($value);
        }

        if (isset($rowData[$addressIndex], $rowData[$statusIndex], $rowData[$contentTypeIndex]) && !empty($rowData[$addressIndex])) {
            $url = trim($rowData[$addressIndex]); // Address column
            $statusCode = trim($rowData[$statusIndex]); // Status Code column
            $contentType = strtolower(trim($rowData[$contentTypeIndex])); // Content Type column

            // Debugging: Show row data
            echo "Processing URL: $url | Status: $statusCode | Content-Type: $contentType\n";

            if ($statusCode == '200' && stripos($contentType, 'text/html') !== false) {
                if (substr($url, -10) === 'index.html') {
                    $urlsWithIndexHtml[$url] = true;
                } elseif (substr($url, -5) === '.html') {
                    $urlsWithHtml[$url] = true;
                } else {
                    $urlsWithoutHtml[$url] = true;
                }
            }
        }
    }

    // Debugging: Show collected URLs
    echo "URLs with .html:\n";
    print_r(array_keys($urlsWithHtml));

    echo "URLs without .html:\n";
    print_r(array_keys($urlsWithoutHtml));

    // Find matches
    $matchingUrlsWithHtml = [];
    $matchingUrlsWithoutHtml = [];

    foreach ($urlsWithHtml as $urlWithHtml => $value) {
        $urlBase = substr($urlWithHtml, 0, -5);
        if (isset($urlsWithoutHtml[$urlBase])) {
            $matchingUrlsWithHtml[] = $urlWithHtml;
            $matchingUrlsWithoutHtml[] = $urlBase;
            echo "Match found: $urlWithHtml <=> $urlBase\n";
        }
    }

    foreach ($urlsWithIndexHtml as $urlWithIndexHtml => $value) {
        $urlBase = substr($urlWithIndexHtml, 0, -10);
        if (isset($urlsWithoutHtml[$urlBase])) {
            $matchingUrlsWithHtml[] = $urlWithIndexHtml;
            $matchingUrlsWithoutHtml[] = $urlBase;
            echo "Match found: $urlWithIndexHtml <=> $urlBase\n";
        }
    }

    echo "Total Matches: " . count($matchingUrlsWithHtml) . "\n";

    if (!empty($matchingUrlsWithHtml)) {
        $newSpreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $newSheet = $newSpreadsheet->getActiveSheet();
        $newSheet->setCellValue('A1', 'URLs with .html or index.html');
        $newSheet->setCellValue('B1', 'Matching URLs without .html');

        $rowIndex = 2;
        foreach ($matchingUrlsWithHtml as $index => $urlWithHtml) {
            $newSheet->setCellValue("A{$rowIndex}", $urlWithHtml);
            $newSheet->setCellValue("B{$rowIndex}", $matchingUrlsWithoutHtml[$index]);
            $rowIndex++;
        }

        $writer = IOFactory::createWriter($newSpreadsheet, 'Xlsx');
        $writer->save('matching_urls.xlsx');

        echo "Matching URLs saved to 'matching_urls.xlsx'.\n";
    } else {
        echo "No matching URLs found.\n";
    }

} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
