<?php

//login page
realpath(__DIR__ . "/../../../bootstrap/app.php");

//if start
if (isset($_POST['action'])) {
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];

    //file empty
    if ($email == '' || $pswd == '') {
        echo " <h3>File the empty Space</h3>";

        //correct email
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Please correct your email</h3>";

        //user.json file
    } else {
        $getdata = file_get_contents(__DIR__ . '/../../../database/user.json');
        $var = json_decode($getdata, true);

        $filter = array_filter($var, function ($getdata) {

            if ($getdata['email'] == $_POST['email'] || ($getdata['pswd'] == $_POST['pswd'])) {

                $_SESSION['is_submit'] = true;
                $_SESSION['name'] = $getdata['name'];
                $_SESSION['lastname'] = $getdata['lastname'];
                $_SESSION['email'] = $getdata['email'];
                $_SESSION['number'] = $getdata['number'];
                $_SESSION['pswd'] = $getdata['pswd'];
                $_SESSION['role'] = $getdata['role'];
                $_SESSION['ID'] = $getdata['ID'];
                return $getdata;
            }
        });

        if ($filter == true) {
            header("Location: ./dashboard.php");
            
            //correct email & pssword
        } else {
            echo "<h4 class=' bg-info p-2 text-white rounded-end rounded-start text-center'>Please correct you email and password</h4>";
        }
    }
}
//if end
