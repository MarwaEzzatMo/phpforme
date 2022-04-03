

Thanks <?php 
$gender = $_POST['gender'];

    if($gender === "male"){
        echo "Mr. ".$_POST['fname']." ".$_POST['lname'];
    }else
    {
        echo "<h1> "."Ms. ".$_POST['fname']." ".$_POST['lname']."</h1>";
    }
?>
<br>
<?php

echo "<p>please review your information</p>";

echo "Name: ".$_POST['fname']." ".$_POST['lname'];
echo "<br>";
echo "<br>";
echo "Address: ".$_POST['address'];
echo "<br>";
echo "<br>";
echo "Country: ".$_POST['country'];
echo "<br>";
echo "<br>";
echo "Department: ".$_POST['dept'];
echo "<br>";
echo "<br>";  
echo "user name : ".$_POST['uname'];
echo "<br>";
echo "<br>";
echo "password: ".$_POST['pass'];
echo "<br>";
echo "<br>";

echo "Skills: ";
foreach($_POST['skills'] as $skill){
    echo "<p>".$skill."</p>";
    }
?>



