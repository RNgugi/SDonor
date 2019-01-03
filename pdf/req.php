<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT * FROM requestes

");

$header = $db_handle->runQuery("SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='bloodbank' 
    AND `TABLE_NAME`='requestes'");

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',5);
// Logo
    $pdf->Image('../Images/Capture.JPG',10,6,30);
    // Arial bold 15
    $pdf->SetFont('Arial','B',12);
    // Move to the right
    $pdf->Cell(80);
    // Title
    $pdf->Cell(60,10,'Blood Bank management system',0,0,'C');
    // Line break
    $pdf->Ln(8);
    $pdf->SetFont('Arial','B',7);
    $pdf->Cell(220,10,'Blood Requested Summary',0,0,'C');
    $pdf->Ln(30);
    $pdf->SetDrawColor(188,188,188);
    $pdf->Line(0,45,350,45);
foreach($header as $heading) {
     
	foreach($heading as $column_heading)
        
		$pdf->Cell(23,5,$column_heading,1);
    
}
foreach($result as $row) {
	$pdf->SetFont('Arial','',5);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(23,9,$column,1);
}
$pdf->Output();
?>
