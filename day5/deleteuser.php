<?php 

    $data=-1;
    if(isset($_GET["data"])){
        $data=$_GET["data"];
    }
	if($data !== -1){
        require "dbconnect.php";
        $object->deleteuser($data);
    }


	
    header("Location:showusers.php");
	
?>