<?php
$dsn = 'mysql:dbname=iti;host=localhost;port=3306;'; #port number
$user = 'root';
$password = '1234';

try {
    //code...

    $db = new PDO($dsn, $user, $password);

    $table = "test2";
    $sql = "CREATE table IF NOT EXISTS $table(
    ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
    fname varchar(225) NOT NULL,
    lname varchar(225) NOT NULL ,
    username VARCHAR( 50 ) NOT NULL, 
    email VARCHAR( 250 ) NOT NULL,
    password VARCHAR( 150 ) NOT NULL, 
    department VARCHAR( 150 ) NOT NULL ,
    phone INT(11)  NOT NULL ,
    gender varchar(50) NOT NULL ,
    country varchar(50) ,
    address varchar(225)
    )";
    $db->exec($sql);
} catch (PDOException $e) {
    $e->getMessage();
}