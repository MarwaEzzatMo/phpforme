<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web Form </title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</head>
</head>
<body>
    


<?php
try {
 
    $userID = $_GET['id'];
    $dbConnection = require 'connectdb.php';
    $select_query = "select * from `test2` where `ID` = $userID ";
    $stmt = $db->prepare($select_query);
    $res = $stmt->execute();
  
    $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
} catch (Exception $e) {
    echo $e->getMessage();
}


     echo "<div class='card mx-auto my-1 ' style='width: 30%;'>
 <img src='https://www.anime-planet.com/images/characters/aiko-ishimine-15494.jpg' class='card-img-top' alt='...''>
 <div class='card-body'>
   <h5 class='card-title'> id : {$rows[0]->ID}</h5>
   <h1 class='card-text'>fname : {$rows[0]->fname}</h1>
   <h1 class='card-text'>lname : {$rows[0]->lname}</h1>
 </div>
 <ul class='list-group list-group-flush'>
   <li class='list-group-item'>email : {$rows[0]->email}</li>
   <li class='list-group-item'>phone : {$rows[0]->phone}</li>
   <li class='list-group-item'>address : {$rows[0]->address}</li>
   <li class='list-group-item'>country : {$rows[0]->country}</li>
   <li class='list-group-item'>gender : {$rows[0]->gender}</li>
   <li class='list-group-item'>user name  : {$rows[0]->username}</li>
   <li class='list-group-item'>department : {$rows[0]->department}</li>
 </ul>
 <div class='card-body'>
   <a href='#' class='card-link'>Another link</a>
 </div>
 </div>";
 
?>

</body>
</html>