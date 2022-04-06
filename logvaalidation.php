<?php
$users = file("users.txt");
$users = implode(":", $users);
$users = explode(":", $users);

    $errors = [];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    if (empty($email)) {
        $errors["email"] = "Email is required";
    }
    if (empty($password)) {
        $errors["pass"] = "Password is required";
    }
    if (count($errors) > 0) {
        $err = json_encode($errors);
        header("Location:regestration.php?errors={$err}");
        return;
    } else {

    if (isset($_POST['email'])) {
        $dir = "users.txt";
        $datafile = fopen($dir, 'r');
        while (($line = fgets($datafile)) !== false) {
            $userArray = explode(":", $line);
            $emailtemp = trim($_POST["email"]);
           
            if ($emailtemp === $userArray[2]) {
                $passwordtemp = $userArray[8];
                var_dump($passwordtemp);
                if ($passwordtemp === trim($_POST["pass"])) {
        
                    echo "Started session";
                    session_start();
                    $_SESSION["email"] = $emailtemp;
                    header("Location:home.php");
                    return;
                }
            } else {
                continue;
            };
        }
    }
    $errors["pass"] = "Incorrect password or email";
    $err = json_encode($errors);
    header("Location:regestration.php?errors={$err}");
}

    
  
