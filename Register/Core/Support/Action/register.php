<?php

if (isset($_POST['action'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $pswd = $_POST['pswd'];
    $cpswd = $_POST['confirmpswd'];
    $role = $_POST['role'];
    $users = json_decode(file_get_contents(__DIR__ . "/../../../database/user.json"));

    if (empty($name) || empty($lastname) || empty($email) || empty($pswd) || empty($cpswd)) {
        echo "<h4 class=' bg-info  p-2 text-white rounded-end rounded-start text-center'>Please fill out the empty field</h4>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h4 class=' bg-info  p-2 text-white rounded-end rounded-start text-center'>This is incorrect gmail ID please Check it out</h4>";
    } else {
        $array = array(
            "name" => $name,
            "lastname" => $lastname,
            "email" => $email,
            "number" => $number,
            "pswd" => $pswd,
            "role" => $role,
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
        $decode = json_encode($decode, JSON_PRETTY_PRINT);

        if (file_put_contents(__DIR__ . "/../../../database/user.json", $decode)) {
            echo "<h4 class=' bg-info p-2 text-white rounded-end rounded-start text-center'>you are success fully sign in .</h4>";
        }
        header("location: ./login.php");
    }
}