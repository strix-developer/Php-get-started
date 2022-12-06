 <?php
    //Fetching form data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_REQUEST['first_name'];
        $lname = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['password'];
        $pnumber = $_REQUEST['phone_number'];
        $role = $_REQUEST['role'];

        //Connecting to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "practice";

        //Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Die if connection was not successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // check if the user has clicked the button "UPLOAD" 

        if (isset($_POST['submit'])) {

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

                //sql query to be executed
                $sql = "INSERT INTO `users` (`First Name`, `Last Name`, `Email`, `Password`, `Phone Number`, `Role`, `File`)
        VALUES ('$fname', '$lname', '$email', '$pass', '$pnumber','$role','$newImageName')";

                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo '<strong>Success!</strong>Your entry has been submitted successfully!';
                    header("Location: create_login.php?status=success");
                } else {
                    echo "The record was not submitted successfully because of this error --->" . mysqli_error($conn);
                }
            }
        }
    }
    mysqli_close($conn);
