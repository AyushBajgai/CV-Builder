<?php 
require_once('../FPDF/fpdf.php');

$pdf = new FPDF();

$pdf -> AddPage();

$pdf -> Image('certificate.jpg',0,0,215,320);

$pdf -> AddFont('DOTMATRX','','DOTMATRX.php');
$pdf -> SetFont('DOTMATRX', '', 10);

//Name of the Candidate
$pdf -> ln(50);
$pdf -> Cell(60, 0, '', 0, 0, 'L');
$pdf -> Cell(130, 0, 'NAME', 0, 0, 'L');
$pdf -> ln(10);

//Date of Birth
$pdf -> Cell(40, 0, '', 0, 0, 'L');
$pdf -> Cell(150, 0, 'DOB', 0, 0, 'L');
$pdf -> ln(10);

//Address
$pdf -> Cell(20, 0, '', 0, 0, 'L');
$pdf -> Cell(105, 0, 'ADDRESS', 0, 0, 'L');
$pdf -> Cell(65, 0, 'CODE', 0, 0, 'L');
$pdf -> ln(10);

//SCHOOL NAME
$pdf -> Cell(10, 0, '', 0, 0, 'L');
$pdf -> Cell(180, 0, 'SCHOOL NAME', 0, 0, 'L');
$pdf -> ln(10);

//SCHOOL NAME
$pdf -> Cell(90, 0, '', 0, 0, 'L');
$pdf -> Cell(100, 0, 'COMPLETED YEAR', 0, 0, 'L');
$pdf -> ln(35);

$pdf -> AddFont('DOTMATRX','','DOTMATRX.php');
$pdf -> SetFont('DOTMATRX', '', 9);

//ENGLISH
$pdf -> Cell(137, 0, '', 0, 0, 'L');
$pdf -> Cell(25, 0, '55', 0, 0, 'L');
$pdf -> Cell(28, 0, '55', 0, 0, 'L');
$pdf -> ln(5);

//NEPALI
$pdf -> Cell(137, 0, '', 0, 0, 'L');
$pdf -> Cell(25, 0, '55', 0, 0, 'L');
$pdf -> Cell(28, 0, '55', 0, 0, 'L');
$pdf -> ln(5);

//MATHEMATICS
$pdf -> Cell(137, 0, '', 0, 0, 'L');
$pdf -> Cell(25, 0, '55', 0, 0, 'L');
$pdf -> Cell(28, 0, '55', 0, 0, 'L');
$pdf -> ln(5);

//SCIENCE
$pdf -> Cell(137, 0, '', 0, 0, 'L');
$pdf -> Cell(25, 0, '55', 0, 0, 'L');
$pdf -> Cell(28, 0, '55', 0, 0, 'L');
$pdf -> ln(5);

//SOCIAL STUDIES
$pdf -> Cell(137, 0, '', 0, 0, 'L');
$pdf -> Cell(25, 0, '55', 0, 0, 'L');
$pdf -> Cell(28, 0, '55', 0, 0, 'L');
$pdf -> ln(5);

//H.P.E
$pdf -> Cell(137, 0, '', 0, 0, 'L');
$pdf -> Cell(25, 0, '55', 0, 0, 'L');
$pdf -> Cell(28, 0, '55', 0, 0, 'L');
$pdf -> ln(5);

//ECONOMICS
$pdf -> Cell(137, 0, '', 0, 0, 'L');
$pdf -> Cell(25, 0, '55', 0, 0, 'L');
$pdf -> Cell(28, 0, '55', 0, 0, 'L');
$pdf -> ln(5);

//EDUCATION
$pdf -> Cell(137, 0, '', 0, 0, 'L');
$pdf -> Cell(25, 0, '55', 0, 0, 'L');
$pdf -> Cell(28, 0, '55', 0, 0, 'L');
$pdf -> ln(43);

//TOTAL
$pdf -> Cell(137, 0, '', 0, 0, 'L');
$pdf -> Cell(25, 0, '', 0, 0, 'L');
$pdf -> Cell(28, 0, '100', 0, 0, 'L');
$pdf -> ln(5);

//PERCENTAGE
$pdf -> Cell(137, 0, '', 0, 0, 'L');
$pdf -> Cell(25, 0, '', 0, 0, 'L');
$pdf -> Cell(28, 0, '55%', 0, 0, 'L');
$pdf -> ln(5);

//DIVISION
$pdf -> Cell(145, 0, '', 0, 0, 'L');
$pdf -> Cell(45, 0, 'DIVISION', 0, 0, 'L');
$pdf -> ln(5);






$pdf -> Output();

?>

