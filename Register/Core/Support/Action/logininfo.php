<?php

if (isset($_POST['action'])) {
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];

    if ($email == '' || $pswd == '') {
        echo " <h3>File the empty Space</h3>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Please correct your email</h3>";
    } else {
        $getdata = file_get_contents(__DIR__ . '/../../../database/user.json');
        $var = json_decode($getdata, true);

        $filter = array_filter($var, function ($getdata) {
            if ($getdata['gmail'] == $_POST['email'] || ($getdata['pswd'] == $_POST['pswd'])) {
                
                $_SESSION['is_submit']=true;
                $_SESSION['name']=$getdata['name'];
                $_SESSION['lastname']=$getdata['lastname'];
                $_SESSION['gmail']=$getdata['gmail'];
                $_SESSION['number']=$getdata['number'];
                $_SESSION['pswd']=$getdata['pswd'];
                echo "<h3>You are successfully Log in</h3>";
                header("Location: ./dashboard.php");
            }
        });

        if ($filter == true) {
             $_SESSION['email']== $email;
          
        } else {
            echo "<h3>Please correct you email and password</h3>";
        }
    }
}
