<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $conpass = $_POST['con-pass'];

    if (empty($name) || empty($lname) || empty($email) || empty($pass) || empty($conpass)) {
        echo "<h4 class='error'>Fill in the empty fields!</h4>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h4 class='error'>You used an invalid e-mail!</h4>";
    } elseif ($pass !== $conpass) {
        echo "<h4 class='error'>Password do not match!</h4>";
    } else {
        echo "<h4 class='success'>You have been signed up!</h4>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <style>
        .error {
            background-color: black;
            color: red;
            text-align: center;
            width: 400px;
            height: 50px;
            padding-top: 7px;
            border-radius: 15px;
        }

        .success {
            background-color: green;
            color: white;
            text-align: center;
            width: 400px;
            height: 50px;
            padding-top: 7px;
            border-radius: 15px;
        }
    </style>
</head>

</html>