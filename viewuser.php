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
$user=file("users.txt")[$_GET["id"]];
var_dump($user);
$line = explode(":", $user);


     echo "<div class='card mx-auto my-1 ' style='width: 30%;'>
 <img src='https://www.anime-planet.com/images/characters/aiko-ishimine-15494.jpg' class='card-img-top' alt='...''>
 <div class='card-body'>
   <h5 class='card-title'> id : {$line[9]}</h5>
   <h1 class='card-text'>fname : {$line[0]}</h1>
   <h1 class='card-text'>lname : {$line[1]}</h1>
 </div>
 <ul class='list-group list-group-flush'>
   <li class='list-group-item'>email : {$line[2]}</li>
   <li class='list-group-item'>phone : {$line[3]}</li>
   <li class='list-group-item'>address : {$line[4]}</li>
   <li class='list-group-item'>country : {$line[5]}</li>
   <li class='list-group-item'>gender : {$line[6]}</li>
   <li class='list-group-item'>user name  : {$line[8]}</li>
   <li class='list-group-item'>department : {$line[10]}</li>
 </ul>
 <div class='card-body'>
   <a href='#' class='card-link'>Another link</a>
 </div>
 </div>";
 
?>

</body>
</html>