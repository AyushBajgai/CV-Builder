<?php

session_start();

$fname="";
$fnameErr="";

function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   //For Candidates
    //First Name
    if(empty($_POST['fname'])){
        $fnameErr = "First name is empty";
    }else {
        $fname = test_input($_POST['fname']);

        if(!preg_match("/^[a-zA-Z]+$/",$fname)){
      $fnameErr = "Only letters and space is allowed.";
    }
    }

    //Middle Name
    if(empty($_POST['mname'])){        
    }else {
        $mname = test_input($_POST['mname']);

        if(!preg_match("/^[a-zA-Z]+$/",$mname)){
      $mnameErr = "Only letters and space is allowed.";
    }
    }
    

    //Last Name
    if(empty($_POST['lname'])){
        $lnameErr = "Last name is empty";
    }else {
        $lname = test_input($_POST['lname']);
        if(!preg_match("/^[a-zA-Z]+$/",$lname)){
            $lnameErr = "Only letters and space is allowed.";
          }
    }

    //Address
    if(empty($_POST['address'])){
        $addressErr = "Address cannot be empty";
    }else {
        $address = test_input($_POST['address']);
    }

    //DOB
    if(empty($_POST['dob'])){
        $dobErr = "DOB is empty";
    }else {
        $dob = test_input($_POST['dob']);
    }

    //Gender
    if(!empty($_POST['gender'])) {
        $gender[] = test_input($_POST['gender']);
    } else {
        $genderErr = 'Please select the gender';
    }

    //Height
    if(empty($_POST['height'])){
        $heightErr = "Height is empty";
    }else {
        $height = test_input($_POST['height']);
        if(!preg_match("/^[0-9,.]+$/",$height)){
            $heightErr = "Enter numeric value";
          }
    }

    //Weight
    if(empty($_POST['weight'])){
        $weightErr = "Weight is empty";
    }else {
        $weight = test_input($_POST['weight']);
        if(!preg_match("/^[0-9]+$/",$weight)){
            $weightErr = "Enter numeric value";
          }
        
    }

    //Education
    if(!empty($_POST['education'])) {
        $education[] = test_input($_POST['education']);
    } else {
        $educationErr = 'Please select the education';
    }

    //Maritial Status
    if(!empty($_POST['status'])) {
        $status[] = test_input($_POST['status']);
    } else {
        $statusErr = 'Please select the maritial status';
    }


    //For FATHER
    //First Name
    if(empty($_POST['fa_name'])){
        $fa_nameErr = "First name is empty";
    }else {
        $fa_name = test_input($_POST['fa_name']);
        if(!preg_match("/^[a-zA-Z]+$/",$fa_name)){
            $fa_nameErr = "Only letters and space is allowed.";
          }
    }

     //Middle Name
     if(empty($_POST['fa_middle'])){        
    }else {
        $fa_middle = test_input($_POST['fa_middle']);

        if(!preg_match("/^[a-zA-Z]+$/",$fa_middle)){
      $fa_middleErr = "Only letters and space is allowed.";
    }
    }

    //Last Name
    if(empty($_POST['fa_last'])){
        $fa_lastErr = "Last name is empty";
    }else {
        $fa_last = test_input($_POST['fa_last']);
        if(!preg_match("/^[a-zA-Z]+$/",$fa_last)){
            $fa_lastErr = "Only letters and space is allowed.";
          }
    }

    //For MOTHER
    //First Name
    if(empty($_POST['mo_name'])){
        $mo_nameErr = "First name is empty";
    }else {
        $mo_name = test_input($_POST['mo_name']);
        if(!preg_match("/^[a-zA-Z]+$/",$mo_name)){
            $mo_nameErr = "Only letters and space is allowed.";
          }
    }

     //Middle Name
     if(empty($_POST['mo_middle'])){        
    }else {
        $mo_middle = test_input($_POST['mo_middle']);

        if(!preg_match("/^[a-zA-Z]+$/",$mo_middle)){
      $mo_middleErr = "Only letters and space is allowed.";
    }
    }

    //Last Name
    if(empty($_POST['mo_last'])){
        $mo_lastErr = "Last name is empty";
    }else {
        $mo_last = test_input($_POST['mo_last']);
        if(!preg_match("/^[a-zA-Z]+$/",$mo_last)){
            $mo_lastErr = "Only letters and space is allowed.";
          }
    }

    //For PASSPORT
    //Passport Number
    if(empty($_POST['passport'])){
        $passportErr = "Passport number is empty";
    }else {
        $passport = test_input($_POST['passport']);
        if(strlen($passport)< 6 || strlen($passport) > 12){
            $passportErr = "Invalid passport length";
        }
        if(preg_match("/^[.]+$/",$passport)){
            $passportErr = "Invalid passport number";
          }
    }

    //Issue date
    if(empty($_POST['issue'])){
        $issueErr = "Passport issue date is empty";
    }else {
        $issue = test_input($_POST['issue']);
    }

    //Expiry date
    if(empty($_POST['expiry'])){
        $expiryErr = "Passport expiry date is empty";
    }else {
        $expiry = test_input($_POST['expiry']);
    }

    //For Experience
    //Profession
    if(empty($_POST['profession'])){
        $professionErr = "Profession detail is empty";
    }else {
        $profession = test_input($_POST['profession']);
        if(!preg_match("/^[a-zA-Z\s]+$/",$profession)){
            $professionErr = "Only letters and space is allowed.";
          }
    }

    //Profession
    if(empty($_POST['work'])){
        $workErr = "Working address is empty";
    }else {
        $work = test_input($_POST['work']);
        if(!preg_match("/^[a-zA-Z\s]+$/",$work)){
            $workErr = "Only letters and space is allowed.";
          }
    }

    //Year
    if(empty($_POST['years'])){
        $yearErr = "Experience year is empty";
    }else {
        $year = test_input($_POST['years']);
        if(!preg_match("/^[0-9]+$/",$year)){
            $yearErr = "Only numeric value is allowed.";
          }
    }

    //Working Address
    if(empty($_POST['w_address'])){
        $w_addressErr = "Working address is empty";
    }else {
        $w_address = test_input($_POST['w_address']);
        if(!preg_match("/^[a-zA-Z\s]+$/",$w_address)){
            $w_addressErr = "Only letters and space is allowed.";
          }
    }

    //country
    if(empty($_POST['country'])){
        $countryErr = "Country is empty";
    }else {
        $country = test_input($_POST['country']);
        if(!preg_match("/^[a-zA-Z\s]+$/",$country)){
            $countryErr = "Only letters and space is allowed.";
          }
    }

 if(empty($fnameErr) && empty($mnameErr) && empty($lnameErr) && empty($educationErr) && empty($statusErr) && empty($addressErr) && empty($dobErr) && empty($genderErr) && empty($heightErr) && empty($weightErr) &&  empty($fa_nameErr) && empty($fa_middleErr) && empty($fa_lastErr) && empty($mo_nameErr) && empty($mo_middleErr) &&  empty($mo_lastErr) && empty($passportErr) &&  empty($issueErr) &&  empty($expiryErr) &&  empty($professionErr) &&  empty($workErr) &&  empty($yearErr) &&  empty($w_addressErr) &&  empty($countryErr)){

    //Storing variables in the form of session
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['mname'] = $_POST['mname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['dob'] = $_POST['dob'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['height'] = $_POST['height'];
    $_SESSION['weight'] = $_POST['weight'];
    $_SESSION['education'] = $_POST['education'];
    $_SESSION['status'] = $_POST['status'];
    $_SESSION['fa_name'] = $_POST['fa_name'];
    $_SESSION['fa_middle'] = $_POST['fa_middle'];
    $_SESSION['fa_last'] = $_POST['fa_last'];
    $_SESSION['mo_name'] = $_POST['mo_name'];
    $_SESSION['mo_middle'] = $_POST['mo_middle'];
    $_SESSION['mo_last'] = $_POST['mo_last'];
    $_SESSION['passport'] = $_POST['passport'];
    $_SESSION['issue'] = $_POST['issue'];
    $_SESSION['expiry'] = $_POST['expiry'];
    $_SESSION['profession'] = $_POST['profession'];
    $_SESSION['work'] = $_POST['work'];
    $_SESSION['years'] = $_POST['years'];
    $_SESSION['w_address'] = $_POST['w_address'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['extra'] = $_POST['extra'];

    header("Location: newFpdf.php");
exit();
 }

 
    
    




}

?>