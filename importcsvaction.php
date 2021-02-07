<?php
include_once 'connection.php';

$path = '';
$error = "";
$ext = "";
require_once 'Classes/PHPExcel/IOFactory.php';
$file = $_FILES['file']['tmp_name'];
$filename = $_FILES["file"]["name"];
$ext = pathinfo(strtolower($filename), PATHINFO_EXTENSION);
if ($ext != "csv") {
    header("location:importcsv.php?er=4");
} else {
    $excelObject = PHPExcel_IOFactory::load($_FILES['file']['tmp_name']);
    $getSheet = $excelObject->getActiveSheet()->toArray(null);
    $count = count($getSheet);
    $keys = $getSheet[0];

    for ($i = 1; $i < $count; $i++) {
        global $db;
        $query = "INSERT INTO people (" . implode(",", $keys) . ") VALUES ('" . implode("','", $getSheet[$i]) . "');";
        $query = str_replace(',)', ')', $query);
//                echo $query;
        mysqli_query($conn, $query);
    }
    header("location:importcsv.php?er=5");
}

