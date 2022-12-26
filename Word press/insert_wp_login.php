<?php
//session start
    session_start();

    if (isset($_POST['submit'])) {
        extract($_POST);
        include "db.php";
        $email = $_POST['email'] ;
        $pswd = $_POST['pswd'] ;
        $sql = mysqli_query($connect, "SELECT * FROM `wordpress` WHERE  Email = '$email' and password = '$pswd' ");
        $row  = mysqli_fetch_array($sql);
        if (is_array($row)) {
            
            header("Location: dashboard.php");
        } else {
            echo "Invalid Email ID/Password";
        }
    }
    ?>