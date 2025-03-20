<?php
require 'vendor/autoload.php'; // Load PHPSpreadsheet

use PhpOffice\PhpSpreadsheet\IOFactory;

$file = 'only_html_all_lang_input.xlsx'; // Change this if the file name is different

// Load the spreadsheet
$spreadsheet = IOFactory::load($file);
$sheet = $spreadsheet->getActiveSheet();

$data = [];
foreach ($sheet->getRowIterator() as $rowIndex => $row) {
    if ($rowIndex == 1) continue; // Skip header

    $cells = [];
    foreach ($row->getCellIterator() as $cell) {
        $cells[] = $cell->getValue();
    }

    // Assuming Address is in column A (index 0) and Status Code is in column C (index 2)
    if (isset($cells[0], $cells[2]) && strpos($cells[0], '/en-US/') !== false && $cells[2] == 200) {
        $data[] = $cells[0]; // Store matching addresses
    }
}

// Print matching URLs
foreach ($data as $url) {
    echo $url . PHP_EOL;
}
?>
