<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_REQUEST['name'];
        $lname = $_REQUEST['lastname'];
        $email = $_REQUEST['email'];
        $pswd= $_REQUEST['pswd'];
        $snumber = $_REQUEST['number'];
        $role = $_REQUEST['role'];

      
        extract($_POST);
        include("mysql.php");
  
        $sql = mysqli_query($connect, "SELECT * FROM signup where Email='$email'");
        if (mysqli_num_rows($sql) > 0) {
            echo "Email Id Already Exists";
            exit;
        } else {

       
            if (isset($_POST['submit'])) {
                
                $fileName = $_FILES["file"]["name"];
                $fileSize = $_FILES["file"]["size"];
                $tmpName = $_FILES["file"]["tmp_name"];

                $validImageExtension = ['jpg', 'jpeg', 'png'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));
                if (!in_array($imageExtension, $validImageExtension)) {
                    echo "<script> alert('Invalid Image Extension'); </script>";
                } elseif ($fileSize > 100000000000000000000) {
                    echo "<script> alert('Image Size Is Too Large'); </script>";
                } else {
                    $ImageName = uniqid();
                    $ImageName .= '.' . $imageExtension;
                    move_uploaded_file($tmpName, 'Upload data/' . $ImageName);

                   
                    $sql = "INSERT INTO `signup` (`Name`, `Last Name`, `Email`, `Password`, `Phone Number`, `Role`, `File`)
                    VALUES ('$name', '$lname', '$email', '$pswd', '$number','$role','$ImageName')";

                    $result = mysqli_query($connect, $sql);
            
                    if ($result) {
                        echo '<strong>Success!</strong>Your entry has been submitted successfully!';
 
                        header("Location: login_page.php?status=success");
                    } else {
                        echo "The record was not submitted successfully because of this error --->" . mysqli_error($connect);
                    }
                }
            }
        }
    }
    mysqli_close($connect);