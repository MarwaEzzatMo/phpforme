<?php
$userID = $_GET['id'];
try {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $department = $_POST['department'];

    $dbConnection = require 'connectdb.php';
    $updateStm = "update `test2` set `fname`=?, `lname`=?, `email`=?,  `address`=? , `gender`=? , `country`=? ,`username`= ?, `department`=? where `ID`=$userID";
    $prepareStm = $db->prepare($updateStm);
    $res = $prepareStm->execute([ $fname ,   $lname , $email  ,$address ,$gender ,$country , $username, $department]);
    header("Location: allusers.php");
} catch (Exception $e) {

    echo $e->getMessage();
}