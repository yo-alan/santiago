<?php
//header('Content-type: application/pdf');
//header("Content-Type: application/force-download"); 
require('class.ezpdf.php');

$pdf = new Cezpdf();
$pdf->selectFont('fonts/Helvetica.afm');
$pdf->ezText('Hello World!',50);
$pdf->ezStream();
$pdf->ezOutput();
?>
