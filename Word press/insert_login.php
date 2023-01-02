    <?php
    //post method
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Sitetitle = $_REQUEST['sitetitle'];
        $Username = $_REQUEST['Username'];
        $Password = $_REQUEST['Password'];
        $email = $_REQUEST['email'];
        //connect to database
        extract($_POST);
        include("db.php");
        $sql = mysqli_query($connect, "SELECT * FROM `admin` WHERE  Email='$email'");
        if (mysqli_num_rows($sql) > 0) {
            echo "Email Id Already Exists";
            exit;
        } else {
            //insert data from wordpress
            $sql = "INSERT INTO `admin`(`Site Title`, `UserName`, `Password`, `Email`) VALUES ('$Sitetitle','$Username','$Password','$email')";

            $result = mysqli_query($connect, $sql);
            //result
            if ($result) {
                echo '<strong>Success!</strong>Your entry has been submitted successfully!';

                header("Location: success.php?status=success");
            } else {
                echo "The record was not submitted successfully because of this error --->" . mysqli_error($connect);
            }
        }
    }
    ?>
