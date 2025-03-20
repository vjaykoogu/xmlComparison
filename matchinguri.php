<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$inputFileName = 'upl.xlsx';

try {
    // Load the Excel file
    $spreadsheet = IOFactory::load($inputFileName);
    $sheet = $spreadsheet->getActiveSheet();

    // Get the "Address" column
    $addressColumn = [];
    foreach ($sheet->getRowIterator(2) as $row) { // Start from row 2 (skip headers)
        $cell = $row->getCellIterator()->current();
        if ($cell !== null) {
            $url = trim($cell->getValue());
            if (!empty($url)) {
                $addressColumn[] = $url;
            }
        }
    }

    // Separate URLs into different categories
    $urlsWithHtml = [];
    $urlsWithoutHtml = [];
    $urlsWithIndexHtml = [];
    foreach ($addressColumn as $url) {
        if (substr($url, -10) === 'index.html') {
            $urlsWithIndexHtml[$url] = true;
        } elseif (substr($url, -5) === '.html') {
            $urlsWithHtml[$url] = true;
        } else {
            $urlsWithoutHtml[$url] = true;
        }
    }

    // Find matching URLs
    $matchingUrlsWithHtml = [];
    $matchingUrlsWithoutHtml = [];
    foreach ($urlsWithHtml as $urlWithHtml => $value) {
        $urlBase = substr($urlWithHtml, 0, -5); // Remove ".html"
        if (isset($urlsWithoutHtml[$urlBase])) {
            $matchingUrlsWithHtml[] = $urlWithHtml;
            $matchingUrlsWithoutHtml[] = $urlBase;
            echo "Match found: $urlWithHtml <=> $urlBase\n";
        }
    }

    // Find matching URLs for index.html cases
    foreach ($urlsWithIndexHtml as $urlWithIndexHtml => $value) {
        $urlBase = substr($urlWithIndexHtml, 0, -10); // Remove "index.html"
        if (isset($urlsWithoutHtml[$urlBase])) {
            $matchingUrlsWithHtml[] = $urlWithIndexHtml;
            $matchingUrlsWithoutHtml[] = $urlBase;
            echo "Match found: $urlWithIndexHtml <=> $urlBase\n";
        }
    }

    // Save results to a new Excel file
    if (!empty($matchingUrlsWithHtml)) {
        $newSpreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $newSheet = $newSpreadsheet->getActiveSheet();

        // Add headers
        $newSheet->setCellValue('A1', 'URLs with .html or index.html');
        $newSheet->setCellValue('B1', 'Matching URLs without .html');

        // Add data
        $rowIndex = 2;
        foreach ($matchingUrlsWithHtml as $index => $urlWithHtml) {
            $newSheet->setCellValue("A{$rowIndex}", $urlWithHtml);
            $newSheet->setCellValue("B{$rowIndex}", $matchingUrlsWithoutHtml[$index]);
            $rowIndex++;
        }

        // Save the new Excel file
        $writer = IOFactory::createWriter($newSpreadsheet, 'Xlsx');
        $writer->save('matching_urls.xlsx');

        echo "Matching URLs have been saved to 'matching_urls.xlsx'.\n";
    } else {
        echo "No matching URLs found.\n";
    }

} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
