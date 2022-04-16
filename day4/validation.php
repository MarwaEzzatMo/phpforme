<?php

    var_dump($_POST);

    $errors = [];
    $olddata=[];

    if(empty($_POST["fname"]) or $_POST["fname"]==""){
        $errors["fname"]= "first name is empty";
    }else{
        $olddata["fname"]= $_POST["fname"];
    }


    if(empty($_POST["lname"]) or $_POST["lname"]==""){
        $errors["lname"]= "last name is empty";
    }  else{
        $olddata["lname"] = $_POST["lname"];
    }

    if(empty($_POST["email"]) or $_POST["email"]==""){
        $errors["email"]= "email is empty";
    }else{
        $olddata["email"] = $_POST["email"];
    }

    if(empty($_POST["phone"]) or $_POST["phone"]==""){
        $errors["phone"]= "phone is empty";
    }else{
        $olddata["phone"] = $_POST["phone"];
    }
    

    if(empty($_POST["address"]) or $_POST["address"]==""){
        $errors["address"]= "address is empty";
    }else{
        $olddata["address"] = $_POST["address"];
    }

    if(empty($_POST["username"]) or $_POST["username"]==""){
        $errors["username"]= "username is empty";
    }else{
        $olddata["username"] = $_POST["username"];
    }

    if(empty($_POST["password"]) or $_POST["password"]==""){
        $errors["password"]= "password is empty";
    } 

    if(empty($_POST["gender"]) or $_POST["gender"] == ""){
        $errors["gender"]= "gender is empty";
    }else{
        $olddata["gender"] = $_POST["gender"] ;
    }

    if(empty($_POST["department"]) or $_POST["department"]==""){
        $errors["department"]= "department is empty";
    }  else{
        $olddata["department"] = $_POST["department"];
    }

    echo "<br>" ;

    $gender = $_POST['gender'];

    if($gender === "male"){
        echo "<h1></h1>"."welcome Mr. ".$_POST['fname']." ".$_POST['lname']."</h1>";
    }else
    {
        echo "<h1> "."welcome Ms. ".$_POST['fname']." ".$_POST['lname']."</h1>";
    }

  


    if(count($errors) > 0){
        $err = json_encode($errors);
        if(count($olddata) > 0 ){ 
        $old= json_encode($olddata);
        header(header:"Location:demo.php?errors={$err}&olddata={$old}");
    }else{
        header(header:"Location:demo.php?errors={$err}");
    }}

    



$dbConnection = require 'connectdb.php';  //require 'dbconnect.php';
        $insert_query = "insert into test2(`fname`, `lname`,`username`, `email` , `password` , `department`, `phone`, `gender`,`country`, `address` ) values(?,?,?,?,?,?,?,?,?,?)";
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $department = $_POST['department'];
        $phone= $_POST['phone'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $address = $_POST['address'];

    
    
        $insert_query = $db->prepare($insert_query);
        $insert_query->bindParam(1, $fname);
        $insert_query->bindParam(2, $lname);
        $insert_query->bindParam(3, $username);
        $insert_query->bindParam(4, $email);
        $insert_query->bindParam(5, $password);
        $insert_query->bindParam(6, $department);
        $insert_query->bindParam(7, $phone);
        $insert_query->bindParam(8, $gender);
        $insert_query->bindParam(9, $country);
        $insert_query->bindParam(10, $address);
        $insert_query->execute();