<?php

if (isset($_POST)) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $gmail = $_POST['gmail'];
    $pswd = $_POST['pswd'];
    $cpswd = $_POST['confirmpswd'];
    if (empty($name) || empty($lastname) || empty($gmail) || empty($pswd) || empty($cpswd)) {
        echo "<h4>Please fill out the empty field</h4>";
    } elseif (!filter_var($gmail, FILTER_VALIDATE_EMAIL)) {
        echo "<h4>This is incorrect gmail id please check it out</h4>";
    } elseif ($pswd !== $cpswd) {
        echo "<h4>error ! please check password</h4>";
    } else {
        echo "<h4>Your sign is compleated and now you can log in</h4>";
    }
}

