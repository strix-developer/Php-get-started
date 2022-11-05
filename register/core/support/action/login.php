<?php

if (isset($_POST['action'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (empty($email) || empty($pass)) {
        echo "<h4 class='error'>Fill in the empty fields!</h4>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h4 class='error'>You used an invalid e-mail!</h4>";
    } else {
        $data = file_get_contents(__DIR__ . "/../../../database/user.json");
        $decode = json_decode($data, true);

        $filter = array_filter($decode, function ($data) {
            if ($data['E-mail'] == $_POST['email'] && ($data['Password'] == $_POST['pass'])) {
                echo "<p class='success'>successfully loged in!</p>";
                return $data;
            }
        });

        if ($filter == true) {

        } else {
            echo "<p class='error'>Invalid email or password</p>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<style>
    .error {
        background-color: #4a4a4a;
        color: whitesmoke;
        text-align: center;
        height: 50px;
        padding-top: 11px;
        border-radius: 15px;
        width: 500px;
        float: left;
        margin-left: 37%;
    }

    .success {
        background-color: green;
        color: white;
        width: 500px;
        text-align: center;
        height: 50px;
        padding-top: 10px;
        border-radius: 15px;
        float: left;
        margin-left: 37%;
    }
</style>

</html>