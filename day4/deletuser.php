<?php

try {
 
    $userID = $_GET['id'];
    $dbConnection = require 'connectdb.php';
    $select_query = "delete from `test2` where `ID` = $userID ";
    $stmt = $db->prepare($select_query);
    $res = $stmt->execute();
  
    $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
    header("Location:allusers.php");
} catch (Exception $e) {
    echo $e->getMessage();
}