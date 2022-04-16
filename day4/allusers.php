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

try{
    $connection1 = require 'connectdb.php';
    $select_query = "select * from `test2`";
     $stmt = $db->prepare($select_query);
     $res=$stmt->execute();
 
     $rows=$stmt->fetchAll(PDO::FETCH_OBJ);
 

echo " <Table striped bordered hover  class=' py-4 px-5 bg=dark  text-dark expand=lg  alert alert-info text-center'    >
<thead>
  <tr  class='bg-light p-3 m-3'  style={{width: '100%', height : '60px' }}>
    <th style ='width: 5%'>Id</th>
    <th style ='width: 9%'>first Name</th>
    <th style ='width: 9%'>last name</th>
    <th style ='width: 10%'>Email</th> 
    <th style ='width: 10%' >phone</th> 
    <th style ='width: 10%'>address</th>  
    <th style ='width: 9%'>country</th>
    <th style ='width: 9%'>ginder</th> 
    <th style ='width: 10%'>user name</th> 
    <th style ='width: 8%'>department</th>
    <th style='width: 29%'>Action</th>
  </tr>";




  
  foreach ($rows as $r){
    echo "<tr> <td>$r->ID</td>   <td>$r->fname</td>    <td>$r->lname</td>  <td>$r->email</td> 
    <td>$r->phone</td>   <td>$r->address</td>  <td>$r->country</td>
    <td>$r->gender</td>   
    <td>$r->username</td>  <td>$r->department</td> ";
    echo "
    <td><button ><a href='seeuser.php?id={$r->ID}'> View</a></button>
         <button> <a href='edituser.php?id={$r->ID}'>Edit</a></button>
         <button><a href='deletuser.php?id={$r->ID}'> delete </a></button></td>";
    echo "</tr>";
}
echo "</table>";


}catch (Exception $e){
echo $e->getMessage();
}
?>
</body>
</html>






