<?php
session_start();
if (!isset($_SESSION["passport"]) && !isset($_SESSION["dob"]) && !isset($_SESSION["expiry"]))
   {
      header("location: index.php");
   }
require_once('FPDF/fpdf.php');

$pdf = new FPDF();

$dec_text= "I here by declare that all the information given in CV are true, complete and correct as to my original copies of";
$dec_text2 ="testimonials. And I'll be resposnible myself if any misrepresentation or manipulation found after checking ";
$dec_text3 = "original testimonials.";

$career = "To pursue a successful career and to be a part of progressive organization that gives scope to enhance my";
$career2 ="knowledge, skills and to work in an innovative and competitve world.";

$pdf -> AddPage();

$pdf -> SetFont('Times', 'B', 20);

//Title
$pdf -> Cell(0, 0, 'Curriculum Vitae', 0, 1, 'C');
$pdf -> ln(15);


if($_SESSION['gender'] == 'Male'){
    $pdf -> SetFont('Times', 'B', 15);
    $pdf -> Cell(0, 0, 'Mr. '.$_SESSION['fname'] ." ". $_SESSION['mname'] ." ".  $_SESSION['lname'] , 0, 1, 'L');
    $pdf -> ln(8);
}else{
    $pdf -> SetFont('Times', 'B', 15);
    $pdf -> Cell(0, 0, 'Mrs. '.$_SESSION['fname'] ." ". $_SESSION['mname'] ." ". $_SESSION['lname'], 0, 1, 'L');
    $pdf -> ln(8);
}

//$pdf -> Cell(0, 0, $name, 0, 1, 'C');

$pdf -> SetFont('Times', 'B', 12);
$pdf -> Cell(0, 0, $_SESSION['address'].', Nepal', 0, 0, 'L');
$pdf -> ln(8);

//Carrer Details
$pdf -> SetFont('Times', 'B', 14);
$pdf -> SetTextColor(255,255,255);
$pdf -> SetFillColor(0,0,0);
$pdf -> Cell(0, 7, 'Carrer Objectives',0, 1, 'L',true);
$pdf -> ln(10);

$pdf -> SetTextColor(0,0,0);
$pdf -> SetFont('Times', '', 12);
$pdf -> Cell(70, 0, $career, 0, 0, 'L');
$pdf -> ln(6);
$pdf -> Cell(70, 0, $career2, 0, 0, 'L');
$pdf -> ln(8);

//Candidate Details
$pdf -> SetFont('Times', 'B', 14);
$pdf -> SetTextColor(255,255,255);
$pdf -> SetFillColor(0,0,0);
$pdf -> Cell(0, 7, 'Candidate Details',0, 1, 'L',true);
$pdf -> ln(10);

//Converting Month to name
$pdf -> SetTextColor(0,0,0);
$pdf -> SetFont('Times', '', 12);
$pdf -> Cell(70, 0, 'Date of Birth', 0, 0, 'L');
$pdf -> Cell(120, 0, ': '.$_SESSION['dob'], 0, 0, 'L');
$pdf -> ln(8);


$pdf -> Cell(70, 0, 'Father\'s Name', 0, 0, 'L');
$pdf -> Cell(120, 0, ': '. $_SESSION['fa_name']." ".$_SESSION['fa_middle']. " ".$_SESSION['fa_last'], 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Mother\'s Name', 0, 0, 'L');
$pdf -> Cell(120, 0, ': '. $_SESSION['mo_name']." ".$_SESSION['mo_middle']. " ".$_SESSION['mo_last'], 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Education', 0, 0, 'L');
$pdf -> Cell(120, 0, ': '.$_SESSION['education'], 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Marital Status', 0, 0, 'L');
$pdf -> Cell(120, 0, ': '.$_SESSION['status'], 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Gender', 0, 0, 'L');
$pdf -> Cell(120, 0, ': '.$_SESSION['gender'], 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Language', 0, 0, 'L');
$pdf -> Cell(120, 0, ': Nepali, Hindi & English', 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Weight', 0, 0, 'L');
$pdf -> Cell(120, 0, ': '.$_SESSION['weight'].' kg', 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Height', 0, 0, 'L');
$pdf -> Cell(120, 0, ': '.$_SESSION['height'], 0, 0, 'L');
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
$pdf -> Cell(120, 0, ': '.$_SESSION['passport'], 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Passport Issue Date', 0, 0, 'L');
$pdf -> Cell(120, 0, ': '.$_SESSION['issue'], 0, 0, 'L');
$pdf -> ln(8);

$pdf -> Cell(70, 0, 'Passport Expiry Date', 0, 0, 'L');
$pdf -> Cell(120, 0, ': '.$_SESSION['expiry'], 0, 0, 'L');
$pdf -> ln(8);

//Experience
$pdf -> SetFont('Times', 'B', 14);
$pdf -> SetTextColor(255,255,255);
$pdf -> SetFillColor(0,0,0);
$pdf -> Cell(0, 7, 'Experience',0, 1, 'L',true);
$pdf -> ln(10);

$pdf -> SetTextColor(0,0,0);
$pdf -> SetFont('Times', '', 12);
$pdf -> Cell(0, 0, '* '. 'Worked as '.$_SESSION['profession'].' at '.$_SESSION['work'].' in '.$_SESSION['w_address']. ' for '.$_SESSION['years'].' years in '.$_SESSION['country'], 0, 0, 'L');
$pdf -> ln(8);

if(!$_SESSION['extra']== ""){
    $pdf -> Cell(0, 0, '* '.$_SESSION['extra'], 0, 1, 'L');
    $pdf -> ln(6);
}


//Decleration
$pdf -> SetFont('Times', 'B', 14);
$pdf -> SetTextColor(255,255,255);
$pdf -> SetFillColor(0,0,0);
$pdf -> Cell(0, 7, 'Decleration',0, 1, 'L',true);
$pdf -> ln(10);

$pdf -> SetTextColor(0,0,0);
$pdf -> SetFont('Times', '', 12);
$pdf -> Cell(70, 0, $dec_text, 0, 0, 'L');
$pdf -> ln(6);
$pdf -> Cell(70, 0, $dec_text2, 0, 0, 'L');
$pdf -> ln(6);
$pdf -> Cell(70, 0, $dec_text3, 0, 0, 'L');
$pdf -> ln(8);





$pdf -> Output();
 
?>