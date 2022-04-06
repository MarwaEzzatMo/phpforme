<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location:regestration.php");
} else {
    $email = $_SESSION["email"];
}
?>
<!DOCTYPE html>
<html lang="en">
<section style="max-width: 600px; margin: 100px auto">
    <p>WELCOME HOME!</p>

</section>

</html>