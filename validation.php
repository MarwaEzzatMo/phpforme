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

    //  if(empty($_POST["skills"]) or $_POST["skills"] == ""){
    //      $errors["skills"]= "skills is empty";
    //  }


//     function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }


ini_set('display_errors', 1);
ini_set('display_statup_errors', 1);
error_reporting(E_ALL);

$filename= $_FILES["image"]["name"];
$tmp_name= $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp_name, "filses/".$filename );
$imagepath = "filses/".$filename;

echo "<img src='{$imagepath}'>";
//image upload
// $target_dir = "files/";
// $target_file = $target_dir . basename($_FILES["image"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// if (isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["image"]["tmp_name"]);
//     if ($check !== false) {
//         $olddata['image'] = "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         $errors['image'] = "File is not an image.";
//         $uploadOk = 0;
//     }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//     $errors['image'] = "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// Check file size
// if ($_FILES["image"]["size"] > 5000000) {
//     $errors['image'] = "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// Allow certain file formats
// if (
//     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//     && $imageFileType != "gif"
// ) {
//     $errors['image'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     $errors['image'] = "Sorry, your file was not uploaded.";
//     // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
//         $olddata['image'] = "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
//     } else {
//         $errors['image'] = "Sorry, there was an error uploading your file.";
//     }
// }


echo "<br>" ;

echo "<p>please review your information</p>";

echo "Name: ".$_POST['fname']." ".$_POST['lname']."<br>";
echo "Address: ".$_POST['address']."<br>";
echo "Country: ".$_POST['country']."<br>";
echo "Department: ".$_POST['dept']."<br>";
echo "user name : ".$_POST['uname']."<br>";
echo "password: ".$_POST['pass']."<br>";
// foreach($_POST['skills'] as $skill){
//     echo "<p>".$skill."</p>";
//     }

    
    // Create User


    if(count($errors) > 0){
        $err = json_encode($errors);
        if(count($olddata) > 0 ){ 
        $old= json_encode($olddata);
        header(header:"Location:demo.php?errors={$err}&olddata={$old}");
    }else{
        header(header:"Location:demo.php?errors={$err}");
    }}

    $gender = $_POST['gender'];

    if($gender === "male"){
        echo "<h1></h1>"."Mr. ".$_POST['fname']." ".$_POST['lname']."</h1>";
    }else
    {
        echo "<h1> "."Ms. ".$_POST['fname']." ".$_POST['lname']."</h1>";
    }


    

    $user = implode(":",$_POST);
var_dump($user);

# file handle

$filename="users.txt";

try{
    $userfile =fopen($filename, "a");
    fwrite($userfile, $user.PHP_EOL);

    fclose($userfile);

}catch (Exception $e){
    echo $e->getMessage();
}
?>