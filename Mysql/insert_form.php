 <?php
    //Fetching form data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_REQUEST['first_name'];
        $lname = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['password'];
        $pnumber = $_REQUEST['phone_number'];
        $role = $_REQUEST['role'];

        //Connecting to server
        extract($_POST);
        include("create_connection.php");
        //For checking if Email address already exists or not
        $sql = mysqli_query($conn, "SELECT * FROM users where Email='$email'");
        if (mysqli_num_rows($sql) > 0) {
            echo "Email Id Already Exists";
            exit;
        } else {

            // If the user has clicked the button "Submit" 
            if (isset($_POST['submit'])) {
                //For inserting the Image to the database
                $fileName = $_FILES["image"]["name"];
                $fileSize = $_FILES["image"]["size"];
                $tmpName = $_FILES["image"]["tmp_name"];

                $validImageExtension = ['jpg', 'jpeg', 'png'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));
                if (!in_array($imageExtension, $validImageExtension)) {
                    echo "<script> alert('Invalid Image Extension'); </script>";
                } elseif ($fileSize > 1000000) {
                    echo "<script> alert('Image Size Is Too Large'); </script>";
                } else {
                    $newImageName = uniqid();
                    $newImageName .= '.' . $imageExtension;
                    move_uploaded_file($tmpName, 'upload/' . $newImageName);

                    //sql query to be executed for inserting the data
                    $sql = "INSERT INTO `users` (`First Name`, `Last Name`, `Email`, `Password`, `Phone Number`, `Role`, `File`)
                    VALUES ('$fname', '$lname', '$email', '$pass', '$pnumber','$role','$newImageName')";

                    $result = mysqli_query($conn, $sql);
                    //To check if data is submitted successfully or not
                    if ($result) {
                        echo '<strong>Success!</strong>Your entry has been submitted successfully!';
                        //Redirecting user to the Login page after succcessfully registered
                        header("Location: create_login.php?status=success");
                    } else {
                        echo "The record was not submitted successfully because of this error --->" . mysqli_error($conn);
                    }
                }
            }
        }
    }
    mysqli_close($conn);