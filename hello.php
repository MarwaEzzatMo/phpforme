

Thanks 
<?php 
$gender = $_POST['gender'];

    if($gender === "male"){
        echo "<h1></h1>"."Mr. ".$_POST['fname']." ".$_POST['lname']."</h1>";
    }else
    {
        echo "<h1> "."Ms. ".$_POST['fname']." ".$_POST['lname']."</h1>";
    }

echo "<br>" ;

echo "<p>please review your information</p>";

echo "Name: ".$_POST['fname']." ".$_POST['lname']."<br>";
echo "Address: ".$_POST['address']."<br>";
echo "Country: ".$_POST['country']."<br>";
echo "Department: ".$_POST['dept']."<br>";
echo "user name : ".$_POST['uname']."<br>";
echo "password: ".$_POST['pass']."<br>";
echo "Skills: ";
foreach($_POST['skills'] as $skill){
    echo "<p>".$skill."</p>";
    }
?>



