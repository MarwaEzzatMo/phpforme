<?php 

$customErr = [
    "fname" => "Enter First Name!",
    "lname" => "Enter Last Name!",
    "gender" => "Enter Gender!",
    "email" => "Enter Email !",
    "uname" => "Enter User Name !",
    "pass" => "Enter password!",
    "phone" => "Enter Phone Number!",


];

$fields=array("fname", "lname", "gender", "email", "uname", "pass", "phone");
$data=array();
$errors=array();

foreach($fields as $field ){
    if(isset($_POST[$field])){
        $data[$field] = $_POST[$field];
        if($data[$field] == ""){
            $errors[$field] = $customErr[$field];
        }
    }
}



if(count($errors) > 0){
    var_dump($data);

    $data = json_encode($data);
    $errors = json_encode($errors);
    header("Location:formvalidate.php?errors={$errors}&data={$data}");
}

try {
    
   if(!empty($data)){
       require "dbconnect.php";

        $user = $object->adduser($data);
       if(!$user){
        header("Location:formvalidate.php");
        exit();

           
       }


   }
    $usersFile = fopen("users.txt", "a");
    $data = isset($data)? implode(':', $data).":" : implode(':', $data);
    fwrite($usersFile, $data.PHP_EOL);
    fclose($usersFile);
    
    header("Location:showusers.php");

} catch (Exception $th) {
    var_dump($th);
}


?>