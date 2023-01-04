<?php
    //request method
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usersname = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $fname = $_REQUEST['firstname'];
        $lname = $_REQUEST['lastname'];
        $passwords = $_REQUEST['password'];
        $role = $_REQUEST['role'];
        //connect to database
        extract($_POST);
        include("db.php");
        $sql = mysqli_query($connect, "SELECT * FROM `adduser` where Email='$email'");
        if (mysqli_num_rows($sql) > 0) {
            echo "Email Id Already Exists";
            exit;
        } else {
            //insert data from adduser
            $sql = "INSERT INTO `adduser`( `User Name`, `Email`, `First Name`, `Last Name`, `Password`, `Role`) VALUES ('$usersname','$email','$fname','$lname','$passwords','$role')";

            $result = mysqli_query($connect, $sql);
            //result
            if ($result) {
                echo '<strong>Success!</strong>Your entry has been submitted successfully!';

                header("Location:all_users.php");
            } else {
                echo "The record was not submitted successfully because of this error --->" . mysqli_error($connect);
            }
        }
    }
