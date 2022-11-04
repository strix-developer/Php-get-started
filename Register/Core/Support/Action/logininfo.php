<?php

// require_once __DIR__."/../../../Bootsstrap/App.php";
if (isset($_POST['action'])) {

    $email = $_POST['email'];
    $pswd = $_POST['pswd'];

    if ($email == '' || $pswd == '') {
        echo " <h3>File the empty Space</h3>";
    }elseif(filter_var(FILTER_VALIDATE_EMAIL)){
        echo "<h3>Please correct your email</h3>";
    } 
    else {
        $getdata = json_decode(file_get_contents(__DIR__.'/../../../database/user.json'), true);
        $logdata = json_encode($getdata, JSON_PRETTY_PRINT);
        print_r($getdata);
        $filter = array_filter($getdata, function ($getdata) {
            if ($getdata['gmail'] == $_POST['email'] || ($getdata['pswd'] == $_POST['pswd'])) {
                echo "<h3>You are successfully Log in</h3>";
            }else {
                echo "<h3Please insert correct G-mail and Password</h3>";
            }
        }); 
    }
}
