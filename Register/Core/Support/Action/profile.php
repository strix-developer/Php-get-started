<?php
//Profile page
if (isset($_POST['action'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_SESSION['email'];
    $number = $_SESSION['number'];
    $age = $_POST['age'];
    $aadhar = $_POST['aadhar'];
    $account = $_POST['account'];
    $role = $_SESSION['role'];
    $id = $_SESSION['ID'];
//array for data
    $array = array(
        "name" => $name,
        "lastname" => $lastname,
        "email" => $email,
        "number" => $number,
        "age" => $age,
        "aadhar" => $aadhar,
        "account" => $account,
        "role" => $role,
        "ID" => $id
    );
    $dataid = json_decode(file_get_contents(__DIR__ . '/../../../database/profile.json'), true);
    $dataid[] = $array;

    $users = json_encode($dataid, JSON_PRETTY_PRINT);


    if (file_put_contents(__DIR__ . "/../../../database/profile.json", $users)) {
        echo "<p class='bg-dark text-center rounded-pill text-white p-3'>Profile Successfully Updated!</p>";
    }
}
