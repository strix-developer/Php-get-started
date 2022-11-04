<?php

if (isset($_POST['action'])) {

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pass = $_POST['pass'];
    $conpass = $_POST['con-pass'];
    $roll = $_POST['role'];

    if (empty($name) || empty($lname) || empty($email) || empty($pass) || empty($conpass) || empty($roll)) {
        echo "<h4 class='error'>Fill in the empty fields!</h4>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h4 class='error'>You used an invalid e-mail!</h4>";
    } elseif ($pass !== $conpass) {
        echo "<h4 class='error'>Password do not match!</h4>";
    } else {
        $array = array(
            'First Name' => $name,
            'Last Name' => $lname,
            'E-mail' => $email,
            'Phone Number' => $number,
            'Password' => $pass,
        );
        $getdata = file_get_contents(__DIR__ . "/../../../database/user.json");
        $decode = json_decode($getdata, true);
        if (count($decode) == 0) {
            $array['ID'] = 1;
        };
        $id = [];
        foreach ($decode as $dataid) {
            array_push($id, $dataid['ID']);
            $var = count($id) + 1;
            $array['ID'] = $var;
        };
        $decode[] = $array;
        $formdata = json_encode($decode, JSON_PRETTY_PRINT);
        if (file_put_contents(__DIR__ . "/../../../database/user.json", $formdata)) {
            echo "<p class='success'>user successfully registered</p>";
        };
    };
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
        padding-top: 7px;
        border-radius: 15px;
    }

    .success {
        background-color: green;
        color: white;
        text-align: center;
        height: 50px;
        padding-top: 10px;
        border-radius: 15px;
    }
</style>

</html>