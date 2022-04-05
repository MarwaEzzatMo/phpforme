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

    if(empty($_POST["mob"]) or $_POST["mob"]==""){
        $errors["mob"]= "phone is empty";
    }else{
        $olddata["mob"] = $_POST["mob"];
    }
    

    if(empty($_POST["address"]) or $_POST["address"]==""){
        $errors["address"]= "address is empty";
    }else{
        $olddata["address"] = $_POST["address"];
    }

    if(empty($_POST["uname"]) or $_POST["uname"]==""){
        $errors["uname"]= "username is empty";
    }else{
        $olddata["uname"] = $_POST["uname"];
    }

    if(empty($_POST["pass"]) or $_POST["pass"]==""){
        $errors["pass"]= "password is empty";
    } 

    if(empty($_POST["gender"]) or $_POST["gender"] == ""){
        $errors["gender"]= "gender is empty";
    }else{
        $olddata["gender"] = $_POST["gender"] ;
    }

    if(empty($_POST["dept"]) or $_POST["dept"]==""){
        $errors["dept"]= "department is empty";
    }  else{
        $olddata["dept"] = $_POST["dept"];
    }

     if(empty($_POST["skills"]) or $_POST["skills"] == ""){
         $errors["skills"]= "skills is empty";
     }

    if(count($errors) > 0){
        $err = json_encode($errors);
        if(count($olddata) > 0 ){ 
        $old= json_encode($olddata);
        header(header:"Location:demo.php?errors={$err}&olddata={$old}");
    }else{
        header(header:"Location:demo.php?errors={$err}");
    }}



    
    // Create User


    $user = implode(":",$_POST);
var_dump($user);

# file handle

$filename="users.txt";

try{
    $userfile =fopen($filename, "a");
    fwrite($userfile, $user.PHP_EOL);

    fclose();

}catch (Exception $e){
    echo $e->getMessage();
}
?>