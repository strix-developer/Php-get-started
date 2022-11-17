<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $age = $_POST['age'];
    $aadhar = $_POST['aadhar'];
    $account = $_POST['account'];
    $users = json_decode(file_get_contents(__DIR__ . "/../../../database/profile.json"), true);
    if (empty($age) || empty($aadhar) || empty($account)) {
        echo "<h4 class=' bg-info  p-2 text-white rounded-end rounded-start text-center'>Please fill out the empty field</h4>";
    } else {
        $array = array(
            "name" => $name,
            "lastname" => $lastname,
            "email" => $email,
            "number" => $number,
            "age" => $age,
            "aadhar" => $aadhar,
            "account" => $account,
        );
        $getdata = file_get_contents(__DIR__ . "/../../../database/profile.json");
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
        $encode = json_encode($decode, JSON_PRETTY_PRINT);
        if (file_put_contents(__DIR__ . "/../../../database/profile.json", $encode)) {
            echo "<h4 class=' bg-info p-2 text-white rounded-end rounded-start text-center'>you are success fully sign in .</h4>";
        }
    }
}
