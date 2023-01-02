<?php
    //post method
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Database = $_REQUEST['database'];
        $username = $_REQUEST['Username'];
        $Password = $_REQUEST['Password'];
        $datahost = $_REQUEST['datahost'];
        //connect to database
        extract($_POST);
        include("db.php");
        $sql = mysqli_query($connect, "SELECT * FROM `admin` where Email='$email'");
        if (mysqli_num_rows($sql) > 0) {
            echo "Email Id Already Exists";
            exit;
        } else {
            //insert data from wordpress
            $sql = "INSERT INTO `admin`(`Database`, `Username`, `Password`, `Database host`) VALUES ('$Database','$Username','$Password','$datahost')";

            $result = mysqli_query($connect, $sql);
            //result
            if ($result) {
                echo '<strong>Success!</strong>Your entry has been submitted successfully!';

                header("Location: install.php?status=success");
            } else {
                echo "The record was not submitted successfully because of this error --->" . mysqli_error($connect);
            }
        }
    }
    ?>