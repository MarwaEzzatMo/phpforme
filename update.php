<?php

$userid = $_GET["id"];

$users = file("users.txt");

$updatedusers = implode(":" , $_POST);

$users[$userid] = $updatedusers ;


$usersfile = fopen("users.txt" , "w");

foreach($users as $u){
    $u= trim($u ,"\n");
    $u=$u.PHP_EOL ;
    fwrite($usersfile , $u);

}

fclose($usersfile);
header("Location:viewusers.php");