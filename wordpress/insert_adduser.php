<?php
//Fetching form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $fname = $_REQUEST['first_name'];
    $lname = $_REQUEST['last_name'];
    $webtitle = $_REQUEST['website'];
    $pass = $_REQUEST['password'];
    $role = $_REQUEST['role'];

    //Connecting to server
    extract($_POST);
    include("create_connection.php");
    //For checking if Email address already exists or not
    $sqluser = mysqli_query($conn, "SELECT * FROM users where  Username='$user'");
    $sqlemail = mysqli_query($conn, "SELECT * FROM users where  Email='$email'");
    if (mysqli_num_rows($sqluser) > 0) {
        echo "Username Already Exists";
        exit;
    } elseif (mysqli_num_rows($sqlemail) > 0) {
        echo "Email Already Exists";
    } else {

        //sql query to be executed for inserting the data
        $sql = "INSERT INTO `users`(`Username`, `Email`, `First Name`, `Last Name`, `Website`, `Password`, `Role`)
         VALUES ('$user','$email','$fname','$lname','$website','$pass','$role')";

        $result = mysqli_query($conn, $sql);
        //To check if data is submitted successfully or not
        if ($result) {
            echo '<strong>Success!</strong>Your entry has been submitted successfully!';
            //Redirecting user to the Login page after succcessfully registered
            header("Location:allusers.php?status=success");
        } else {
            echo "The record was not submitted successfully because of this error --->" . mysqli_error($conn);
        }
    }
}