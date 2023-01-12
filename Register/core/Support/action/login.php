<!DOCTYPE html>
<html lang="en">
<style>
    .error {
        background-color: #212529;
        color: whitesmoke;
        text-align: center;
        height: 50px;
        padding-top: 10px;
    }

    .success {
        background-color: #198754;
        color: white;
        width: 500px;
        text-align: center;
        height: 50px;
        padding-top: 10px;
    }
</style>

</html>

<?php
if (isset($_POST['action'])) {
    //Fetching user's login data
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //Condition for empty fields
    if (empty($email) || empty($pass)) {
        echo "<h4 class='error'>Fill in the empty fields!</h4>";
    } //Condition for valid email format
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h4 class='error'>You used an invalid e-mail!</h4>";
    } else {
        //Read json file and decode json to associative array
        $data = json_decode(file_get_contents(__DIR__ . "/../../../database/user.json"), true);
        //array_filter Iterates over each value in the array passing them to the callback function.
        $filter = array_filter($data, function ($data) {
            //Condition for Login
            if ($data['Email'] == $_POST['email'] && ($data['Password'] == $_POST['pass'])) {
                $_SESSION['submit'] = true;
                $_SESSION['name'] = $data['Name'];
                $_SESSION['number'] = $data['Number'];
                $_SESSION['email'] = $data['Email'];
                $_SESSION['pass'] = $data['Password'];
                $_SESSION['role'] = $data['Role'];
                $_SESSION['picture']= $data['file']['image'];
                $_SESSION['ID'] = $data['ID'];
                return $data;
            }
        });
        //If user log in successfully then redirecting him to profile page
        if ($filter == true) {
            header("location: ./dashboard.php");
        } else {
            echo "<p class='error'>Invalid email or password</p>";
        }
    }
}
?> 