<?php

require_once('FPDF/fpdf.php');

$pdf = new FPDF();

$pdf -> AddPage();

$pdf -> SetFont('Times', 'B', 20);

//Title
$pdf -> Cell(0, 0, 'Curriculum Vitae', 0, 1, 'C');
$pdf -> ln(15);

$pdf -> SetFont('Times', 'B', 15);
$pdf -> Cell(0, 0, 'Name', 0, 1, 'L');
$pdf -> ln(6);

$pdf -> SetFont('Times', 'B', 12);
$pdf -> Cell(70, 0, 'Address', 0, 0, 'L');
$pdf -> Cell(120, 0, ', Nepal', 0, 1, 'L');
$pdf -> ln(8);

//Candidate Details
$pdf -> SetFont('Times', 'B', 14);
$pdf -> SetTextColor(255,255,255);
$pdf -> SetFillColor(0,0,0);
$pdf -> Cell(0, 7, 'Candidate Details',0, 1, 'L',true);
$pdf -> ln(10);

$pdf -> SetTextColor(0,0,0);
$pdf -> SetFont('Times', '', 12);
$pdf -> Cell(70, 0, 'Date of Birth', 0, 0, 'L');
$pdf -> Cell(120, 0, ': ....', 0, 0, 'L');
$pdf -> ln(8);


$pdf -> Cell(70, 0, 'Father\'s Name', 0, 0, 'L');
$pdf -> Cell(120, 0, ': ....', 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Mother\'s Name', 0, 0, 'L');
$pdf -> Cell(120, 0, ': ....', 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Gender\'s Name', 0, 0, 'L');
$pdf -> Cell(120, 0, ': ....', 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Weight', 0, 0, 'L');
$pdf -> Cell(120, 0, ': ....', 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Height', 0, 0, 'L');
$pdf -> Cell(120, 0, ': ....', 0, 0, 'L');
$pdf -> ln(8);

//Passport
$pdf -> SetFont('Times', 'B', 14);
$pdf -> SetTextColor(255,255,255);
$pdf -> SetFillColor(0,0,0);
$pdf -> Cell(0, 7, 'Passport Details',0, 1, 'L',true);
$pdf -> ln(10);

$pdf -> SetTextColor(0,0,0);
$pdf -> SetFont('Times', '', 12);
$pdf -> Cell(70, 0, 'Passport Number', 0, 0, 'L');
$pdf -> Cell(120, 0, ': ....', 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Passport Issue Date', 0, 0, 'L');
$pdf -> Cell(120, 0, ': ....', 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Passport Expiry Date', 0, 0, 'L');
$pdf -> Cell(120, 0, ': ....', 0, 0, 'L');
$pdf -> ln(8);




$pdf -> Output();
 


?>