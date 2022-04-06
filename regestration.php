<?php

    if (isset($_GET["errors"])){
        $errors = json_decode($_GET["errors"]);
    }

?>
<html>
    <head>
        <title>Form</title>
        <link rel="stylesheet" href="regs.css"/>
        <style>
            .container{
                margin-top:150px
            }
        </style>
    </head>
    <body>
       
            
        <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Register Today</h3>
                        <p>Fill in the data below.</p>
                        <form  action="./logvaalidation.php"   enctype="multipart/form-data" method="post" >

                            
                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address"  >
                                <?php
                        if(isset($errors->email)){
                            echo "<p class='error'> $errors->email</p>";
                        }
                        else{
                        }
                    ?>
                            </div>

                           


                           <div class="col-md-12">
                              <input class="form-control" type="password" name="pass" placeholder="Password" >
                              <?php
                if(isset($errors->pass)){
                    echo "<p class='error'> $errors->pass</p>";
                }
                ?>
                           </div>


                           

        

                            <div class="form-button  m-5">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    


    </body>


</html>