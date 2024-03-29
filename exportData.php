<?php
ob_start();
session_start();
/**
 * https://www.codexworld.com/export-data-to-csv-file-using-php-mysql/
 */

// Load the database configuration file 
include_once 'php/dbConnection.php';
include_once 'php/source.php';

// Fetch records from database 
$regArray = getAllData('requisition');

if (count($regArray) > 0) {
    $delimiter = ",";
    $filename = "requisition-data_" . date('Y-m-d') . ".csv";

    // Create a file pointer 
    $f = fopen('php://memory', 'w');

    // Set column headers 
    $fields = array('First', 'Last', 'Email', 'Payment', 'Due', 'Paid', 'Date', 'Phone', 'Address', 'City', 'State', 'Zip Code', 'Fellowship', 'Home Group', 'Reg Type', 'EBMB', 'Dinner', 'BreakFast', 'Ice Cream', 'Dance', 'Help-Hand', 'TOS');

    fputcsv($f, $fields, $delimiter);

    // Output each row of the data, format line as csv and write to file pointer 
    foreach ($regArray as $eachReg) {

        $lineData = array(
            $eachReg['firstname'],
            $eachReg['lastname'],
            $eachReg['email'],
            $eachReg['payment'],
            $eachReg['total'],
            $eachReg['paid'],
            $eachReg['result'],
            $eachReg['phone'],
            $eachReg['address'],
            $eachReg['city'],
            $eachReg['state'],
            $eachReg['zipcode'],
            $eachReg['fellowship'],
            $eachReg['homegroup'],
            $eachReg['registration'],
            $eachReg['ebmb'],
            $eachReg['speakerdinner'],
            $eachReg['breakfast'],
            $eachReg['icecream'],
            $eachReg['dance'],
            $eachReg['helpinghand'],
            $eachReg['tos']
        );
        fputcsv($f, $lineData, $delimiter);
    }

    // Move back to beginning of file 
    fseek($f, 0);

    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer 
    fpassthru($f);
}
exit;
