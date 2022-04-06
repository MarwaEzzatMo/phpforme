<?php

$userid = $_GET["id"];

$users = file("users.txt");

$selectuser = $users[$userid];

$selectuser =explode(':' , $selectuser);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="./demo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body> 

<form action='./update.php' method="post" >
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>PHP COURSE FORM </h3>
            <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for you.</p>
            <div class="card">
                <h5 class="text-center mb-4">Powering world-class companies</h5>
                <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                   <div class="form-group col-sm-6 flex-column d-flex"> <label name="first_name" class="form-control-label px-3">First name<span class="text-danger"> * 	
					
</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"  value="<?php echo $selectuser[0]; ?>"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label  class="form-control-label px-3">Last name<span class="text-danger"> * </span></label> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)" value="<?php $selectuser[1]; ?>"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">E-mail<span class="text-danger"> * </span></label> <input type="text" id="email" name="email" placeholder="" onblur="validate(2)" value="<?php echo $selectuser[2]; ?>"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *  </span></label> <input type="text" id="mob" name="mob" placeholder="" onblur="validate(3)" value="<?php echo  $selectuser[3]; ?>" > </div>
                    </div>  
                    <div class="row justify-content-between text-left">
                  <div class="form-group col-sm-6 flex-column d-flex">  <label for="address" class="form-control-label px-3" >Address  <span class="text-danger">* </span></label></div>
						
							<textarea id="address" cols="31" name="address" class="col-sm-10 mx-4"  value="<?php echo $selectuser[4]; ?>" ></textarea>
                        </div>
                        <div class="row form-group my-4">
                <label class="control-label col-sm-2" for="country">Country :</label>
                <div class="col-sm-10">
                    <select id="country" name="country" value="<?php echo $selectuser[5]; ?>" >
                        <option value="" disabled selected>Select Your Country
                        </option>
                        <option value="Egypt">Egypt</option>
                        <option value="Australia">Australia</option>
                        <option value="Egypt">Sudan</option>
                        <option value="Australia">USA</option>
                        <option value="Egypt">UK</option>
                        <option value="Australia">China</option>
                    </select>
                </div>
            </div>

            <div class=" row form-group">
                <label class="control-label col-sm-3" for="gender">Gender : <span class="text-danger">* </span></label>
                <div class="col-sm-9">
                    <input  type="radio" name="gender" value="male" id="male"  value="<?php echo $selectuser[6]; ?>">
                    <label for="male">Male</label>

                    <input  type="radio" name="gender" value="female" id="female" style="margin-left: 50px;  value="<?php echo $selectuser[6]; ?>">
                    <label for="female">Female</label>
                </div>
            </div>
                        
           
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">User Name<span class="text-danger"> * </span>  
                </label> <input  type="text" id="job" name="uname" placeholder="" onblur="validate(5)" value="<?php echo  $selectuser[7]; ?>"> </div>
                    
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Password <span class="text-danger"> * </span></label> <input type="password" id="ans" name="pass" placeholder="" onblur="validate(6)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Department<span class="text-danger"> * </span></label> <input type="text" id="job" name="dept" placeholder="" onblur="validate(5)" value="<?php echo $selectuser[9]; ?>"> </div>
                
                </div>
                     <!-- <input type="hidden" value=" <?php echo $userid ; ?>" > -->
                     
                   

                    <div class="row justify-content-center ms-3">
                        <div class="form-group col-sm-5"> <button type="submit" class="btn-block btn-primary">Submit</button> </div> 
                        <div class="form-group col-sm-5 ms-3"> <button type="reset" class="btn-block btn-warning">reset</button> </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</form>

</body>
</html>

