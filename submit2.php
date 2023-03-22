<?php
require_once 'PHPExcel.php';

// Create a new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set the active worksheet to the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Add data to the first sheet
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Name');
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Email');
$objPHPExcel->getActiveSheet()->setCellValue('A2', $_POST['name']);
$objPHPExcel->getActiveSheet()->setCellValue('B2', $_POST['email']);

// Save the workbook as an Excel file
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('database.xlsx');

echo "Data saved to Excel.";
?>
