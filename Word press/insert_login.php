<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Sitetitle = $_REQUEST['Sitetitle'];
        $Username = $_REQUEST['Username'];
        $Password = $_REQUEST['Password'];
        $email= $_REQUEST['email'];
        extract($_POST);
        include("db.php");
  
        $sql = mysqli_query($connect, "SELECT * FROM wordpress where Email='$email'");
        if (mysqli_num_rows($sql) > 0) {
            echo "Email Id Already Exists";
            exit;
        } else {    
                    $sql = "INSERT INTO `wordpress`(`ID`, `Site Title`, `User Name`, `Password`, `Email`) VALUES ('$Sitetitle','$Username','$Password','$email')";

                    $result = mysqli_query($connect, $sql);
            
                    if ($result) {
                        echo '<strong>Success!</strong>Your entry has been submitted successfully!';
 
                        header("Location: success.php?status=success");
                    } else {
                        echo "The record was not submitted successfully because of this error --->" . mysqli_error($connect);
                    }
                }
            }
    ?>
</body>
</html>