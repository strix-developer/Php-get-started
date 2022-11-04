<?php

if (isset($_POST)) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $gmail = $_POST['gmail'];
    $number = $_POST['number'];
    $pswd = $_POST['pswd'];
    $cpswd = $_POST['confirmpswd'];
    if (empty($name) || empty($lastname) || empty($gmail) || empty($pswd) || empty($cpswd)) {
        echo "<h4>Please fill out the empty field</h4>";
    } elseif (!filter_var($gmail, FILTER_VALIDATE_EMAIL)) {
        echo "<h4>This is incorrect gmail ID please Check it out</h4>";
    } elseif ($pswd !== $cpswd) {
        echo "<h4>error ! please check password</h4>";
    } else {
        $array = array(
            "name" => $name,
            "lastname" => $lastname,
            "gmail" => $gmail,
            "number" => $number,
            "pswd" => $pswd,
        );
        $getdata = file_get_contents(__DIR__ . "/../../../database/user.json");
        $decode = json_decode($getdata, true);
        if (count($decode) == 0) {
            $array["ID"] = 1;
        }
        $id = [];
        foreach ($decode as $dataid) {
            array_push($id, $dataid['ID']);
            $var = count($id) + 1;
            $array['ID'] = $var;
        }
        $decode[] = $array;
        $data = json_encode($decode, JSON_PRETTY_PRINT);
        if (file_put_contents(__DIR__ . "/../../../database/user.json", $data)) {
            echo "<h4>you account is successfully signin you can log in now</h4>";
        }
    }
}
?>
