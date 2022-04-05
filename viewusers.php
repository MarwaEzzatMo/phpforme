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

$users = file("users.txt");

echo " <Table striped bordered hover  class=' py-4 px-5 bg=dark  text-dark expand=lg  alert alert-info text-center'    >
<thead>
  <tr  class='bg-light p-3 m-3'  style={{width: '25%', height : '60px' }}>
    <th style ='width: 5%'>Id</th>
    <th style ='width: 8%'>first Name</th>
    <th style ='width: 8%'>last name</th>
    <th style ='width: 10%'>Email</th> 
    <th style ='width: 8%' >phone</th> 
    <th style ='width: 8%'>address</th>  
    <th style ='width: 8%'>country</th>
    <th style ='width: 5%'>ginder</th> 
    <th style ='width: 8%'>user name</th> 
    <th style ='width: 10%'>department</th>
    
    <th style='width: 25%'>Action</th>
  </tr>";
//echo ($_SERVER["REQUEST_URI"]);
foreach ($users as $index=>$l){  # $l --> line ===> is string
    $line = explode(":", $l); # convert the string to array

    echo "<tr>";
    echo " <td>{$line[9]}</td><td>{$line[0]}</td>
            <td>{$line[1]}</td>
          <td>{$line[2]}</td> <td>{$line[3]}</td>
          <td>{$line[4]}</td> <td>{$line[5]}</td>
          <td>{$line[6]}</td> <td>{$line[8]}</td>
           <td>{$line[10]}</td>
         <td><button ><a href='viewuser.php?id={$index}'> View</a></button>
         <button> <a href='#'>Edit</a></button>
         <button><a href='delete.php?id={$index}'> delete </a></button></td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>















