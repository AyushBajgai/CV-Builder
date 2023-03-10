<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV Maker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Styles/style.css" /> 
    <link rel="stylesheet" type="text/css" href="../Styles/nepaliDate.css" /> 

</head>
  <body>
    <div class="container-fluid bg-danger">
        <div class="row pt-3">
            <h1 class="text-center text-white mb-4">SLC Certificate</h1>
        </div>
        
        <div class="container pb-5 bg-body ">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <fieldset class="border p-2">
                            <legend class="float-none w-auto p-1">Candidate Details</legend>

                            <div class="row mt-4">
                                <div class="col-12">
                                    <label for="exampleFormControlInput1">First Name</label>
                                    <input type="text" name="fullName" class="form-control">
                                    <p class="text-danger"></p>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-2">
                                    <label for="exampleFormControlInput1">Date of Birth (BS)</label>
                                    <input class="form-control" aria-label="Default select example" type="text" id="nepali-datepicker" name="dob">
                                    <p class="text-danger"></p>
                                </div>

                                <div class="col-lg-2">
                                    <select class="form-select mt-4" id="year" name="month" aria-label="Default select example">
                                    </select>
                                      <p class="text-danger"></p>
                                </div>
                            </div>
                        </fieldset>

                        

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('../footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https//ajax.googleapis.com/ajax/libs/jquery/l.12.4/jquery.min.js"></script>    
    <script src="script.js" type="text/javascript"></script>
    <script src="nepaliDate.js" type="text/javascript"></script>
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

.form-control:focus{border: 2px solid #FF0000;  box-shadow: none; -webkit-box-shadow: none;} 
.has-error .form-control:focus{box-shadow: none; -webkit-box-shadow: none;}

</style>