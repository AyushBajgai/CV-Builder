<?php require('save.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV Maker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Styles/style.css" /> 

</head>
  <body>
    <div class="container-fluid bg-success">
        <div class="row pt-3">
            <h1 class="text-center text-white mb-4">Normal C.V.</h1>
        </div>
        
        <div class="container pb-5 bg-body ">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <fieldset class="border p-2">
                            <legend class="float-none w-auto p-1">Candidate Details</legend>
                            <div class="row mt-4">    
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="exampleFormControlInput1">First Name</label>
                                    <input type="text" name="fname" class="form-control" value="<?php echo isset($_POST["fname"]) ? $_POST["fname"] : ''; ?>">
                                    <p class="text-danger"><?php if(isset($fnameErr)) echo $fnameErr; ?></p>
                                </div>
    
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="exampleFormControlInput1">Middle Name</label>
                                    <input type="text" name="mname" class="form-control" value="<?php echo isset($_POST["mname"]) ? $_POST["mname"] : ''; ?>">
                                    <p class="text-danger"><?php if(isset($mnameErr)) echo $mnameErr; ?></p>
                                </div>
    
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="exampleFormControlInput1">Last Name</label>
                                    <input type="text" name="lname" class="form-control" value="<?php echo isset($_POST["lname"]) ? $_POST["lname"] : ''; ?>">
                                    <p class="text-danger"><?php if(isset($lnameErr)) echo $lnameErr; ?></p>
                                </div>
                            </div>
    
                            <div class="row mt-3">
                                <div class="col-lg-8">
                                    <label for="exampleFormControlInput1">Permanent Address</label>
                                    <input type="text" name="address" class="form-control" value="<?php echo isset($_POST["address"]) ? $_POST["address"] : ''; ?>">
                                    <p class="text-danger"><?php if(isset($addressErr)) echo $addressErr; ?></p>
                                </div>
        
                                <div class="col-lg-4">
                                    <label for="exampleFormControlInput1">Date of Birth</label>
                                    <input type="date" name="dob" class="form-control" value="<?php echo isset($_POST["dob"]) ? $_POST["dob"] : ''; ?>">
                                    <p class="text-danger"><?php if(isset($dobErr)) echo $dobErr; ?></p>
                                </div>
                            </div>
    
                            <div class="row mt-4">    
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <select class="form-select mt-4" name="gender" aria-label="Default select example">
                                        <option selected value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      </select>
                                      <p class="text-danger"><?php if(isset($genderErr)) echo $genderErr; ?></p>
                                </div>
    
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="exampleFormControlInput1">Height</label>
                                    <input type="text" name="height" class="form-control" value="<?php echo isset($_POST["height"]) ? $_POST["height"] : ''; ?>">
                                    <p class="text-danger"><?php if(isset($heightErr)) echo $heightErr; ?></p>
                                </div>
    
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="exampleFormControlInput1">Weight</label>
                                    <input type="text" name="weight" class="form-control" value="<?php echo isset($_POST["weight"]) ? $_POST["weight"] : ''; ?>">
                                    <p class="text-danger"><?php if(isset($weightErr)) echo $weightErr; ?></p>
                                </div>
                            </div>

                            <div class="row mt-4 mb-2">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <select class="form-select" name="education" aria-label="Default select example">
                                        <option selected value="">Education Qualification</option>
                                        <option value="SLC Passed">SLC Passed</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Bachelor Passed">Bachelor Passed</option>
                                    </select>
                                    <p class="text-danger"><?php if(isset($educationErr)) echo $educationErr; ?></p>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <select class="form-select" name="status" aria-label="Default select example">
                                        <option selected value="">Maritial Status</option>
                                        <option value="Married">Married</option>
                                        <option value="Unmarried">Unmarried</option>
                                    </select>
                                    <p class="text-danger"><?php if(isset($statusErr)) echo $statusErr; ?></p>
                                </div>
                            </div>
                        </fieldset>
    
                        <fieldset class="border p-2 mt-3">
                            <legend class="float-none w-auto p-1">Father Name</legend>                        
                                <div class="row mt-4 mb-2">    
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="exampleFormControlInput1">First Name</label>
                                        <input type="text" name="fa_name" class="form-control" value="<?php echo isset($_POST["fa_name"]) ? $_POST["fa_name"] : ''; ?>">
                                        <p class="text-danger"><?php if(isset($fa_nameErr)) echo $fa_nameErr; ?></p>
                                    </div>
        
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="exampleFormControlInput1">Middle Name</label>
                                        <input type="text" name="fa_middle" class="form-control" name="miname" value="<?php echo isset($_POST["fa_middle"]) ? $_POST["fa_middle"] : ''; ?>">
                                        <p class="text-danger"><?php if(isset($fa_middleErr)) echo $fa_middleErr; ?></p>
                                    </div>
        
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="exampleFormControlInput1">Last Name</label>
                                        <input type="text" class="form-control" name="fa_last" value="<?php echo isset($_POST["fa_last"]) ? $_POST["fa_last"] : ''; ?>">
                                        <p class="text-danger"><?php if(isset($fa_lastErr)) echo $fa_lastErr; ?></p>
                                    </div>
                                </div>                       
                        </fieldset>
    
                        <fieldset class="border p-2 mt-3">
                            <legend class="float-none w-auto p-1">Mother Name</legend>                        
                                <div class="row mt-4 mb-2">    
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="exampleFormControlInput1">First Name</label>
                                        <input type="text" name="mo_name" class="form-control" value="<?php echo isset($_POST["mo_name"]) ? $_POST["mo_name"] : ''; ?>">
                                        <p class="text-danger"><?php if(isset($mo_nameErr)) echo $mo_nameErr; ?></p>
                                    </div>
        
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="exampleFormControlInput1">Middle Name</label>
                                        <input type="text" name="mo_middle" class="form-control" value="<?php echo isset($_POST["mo_middle"]) ? $_POST["mo_middle"] : ''; ?>">
                                        <p class="text-danger"><?php if(isset($mo_middleErr)) echo $mo_middleErr; ?></p>
                                    </div>
        
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="exampleFormControlInput1">Last Name</label>
                                        <input type="text" name="mo_last" class="form-control" value="<?php echo isset($_POST["mo_last"]) ? $_POST["mo_last"] : ''; ?>">
                                        <p class="text-danger"><?php if(isset($mo_lastErr)) echo $mo_lastErr; ?></p>
                                    </div>
                                </div>                       
                        </fieldset>
    
                        <fieldset class="border p-2 mt-3">
                            <legend class="float-none w-auto p-1">Passport Details</legend>                        
                                <div class="row mt-4 mb-2">    
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="exampleFormControlInput1">Passport Number</label>
                                        <input type="text" name="passport" class="form-control" value="<?php echo isset($_POST["passport"]) ? $_POST["passport"] : ''; ?>">
                                        <p class="text-danger"><?php if(isset($passportErr)) echo $passportErr; ?></p>
                                    </div>
        
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="exampleFormControlInput1">Passport Issue Date</label>
                                        <input type="date" name="issue" class="form-control" value="<?php echo isset($_POST["issue"]) ? $_POST["issue"] : ''; ?>">
                                        <p class="text-danger"><?php if(isset($issueErr)) echo $issueErr; ?></p>
                                    </div>
        
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="exampleFormControlInput1">Passport Expiry Date</label>
                                        <input type="date" name="expiry" class="form-control" value="<?php echo isset($_POST["expiry"]) ? $_POST["expiry"] : ''; ?>">
                                        <p class="text-danger"><?php if(isset($expiryErr)) echo $expiryErr; ?></p>
                                    </div>
                                </div>                       
                        </fieldset>
    
                        <fieldset class="border p-2 mt-3">
                            <legend class="float-none w-auto p-1">Experience Details</legend>                        
                                <div class="row mt-4 mb-2">    
                                    <div class="d-flex justify-content-center">
                                        <label class="p-2">Worked as</label>
                                        <input type="text" name="profession" class="form-control" value="<?php echo isset($_POST["profession"]) ? $_POST["profession"] : ''; ?>">

                                        <label class="p-2">at</label>
                                        <input type="text" name="work" class="form-control" value="<?php echo isset($_POST["work"]) ? $_POST["work"] : ''; ?>">
 
                                        <label class="p-2">for</label>
                                        <input type="text" name="years" class="form-control" value="<?php echo isset($_POST["years"]) ? $_POST["years"] : ''; ?>">
   
                                        <label class="p-2">years at</label>
                                        <input type="text" name="w_address" class="form-control" value="<?php echo isset($_POST["w_address"]) ? $_POST["w_address"] : ''; ?>">
                   
                                        <label class="p-2">in</label>
                                        <input type="text" name="country" class="form-control" value="<?php echo isset($_POST["country"]) ? $_POST["country"] : ''; ?>">
                                                                          </div>
                                    <div class="row mt-3">
                                        <p class="text-danger"><?php if(isset($professionErr)) echo $professionErr; ?></p>
                                        <p class="text-danger"><?php if(isset($workErr)) echo $workErr; ?></p>
                                        <p class="text-danger"><?php if(isset($yearErr)) echo $yearErr; ?></p>
                                        <p class="text-danger"><?php if(isset($w_addressErr)) echo $w_addressErr; ?></p>
                                        <p class="text-danger"><?php if(isset($countryErr)) echo $countryErr; ?></p>
                                    </div>


                                </div>        

                                <div class="row mt-5 mb-3">
                                    <textarea id="w3review" name="extra" placeholder="Add extra experience" style="overflow:auto; height:150px; max-width:1250px; margin-left: 15px;"></textarea>
                                </div>
                        </fieldset>
                            <button type="submit" name="save" class="btn btn-success mt-4 mb-3 me-4">Save CV</button>
                        
                        </form>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

<style>
    input[type=text], input[type=date]{

}

legend{
    font-weight: bold;
}

select{
    border: 1px solid black;
}

.bg-body{
    border-radius: 20px;
    padding: 20px;
}

.form-control:focus{border: 2px solid #5cb85c;  box-shadow: none; -webkit-box-shadow: none;} 
.has-error .form-control:focus{box-shadow: none; -webkit-box-shadow: none;}

</style>