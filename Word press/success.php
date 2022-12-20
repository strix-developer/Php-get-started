<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sixth page</title>
</head>

<body>
    <div class="col-lg-12">
        <img src="images/w-logo-blue.png" alt="avatar" class="rounded-circle img-fluid mx-auto d-block ">
        <div class="mb-3 col-sm-3 mx-auto d-block alert alert-dark rounded">
            <h3 class="col-sm-6 mx-auto d-block text-start ">Success!</h3><hr>
            <p class="col-sm-6 mx-auto d-block text-start">WordPress has been installed. Thank you, and enjoy!</p>
            <div class="mb-3 col-sm-6 mx-auto d-block text-start">
                <label for="username">User Name:</label><br>
                <input type="text" value="admin" disabled>
            </div>
            <div class="mb-3 col-sm-6 mx-auto d-block text-start">
                <label for="pswd">Password:</label><br>
                <input type="text" value="Your chosen Password" disabled><br>
            </div>
            <div class="mb-3 col-sm-6 mx-auto d-block">
                <a href="wp_login.php"><button type="button" class="navbar-dark bg-dark text-white img-thumbnail">Login</button></a>
            </div>
        </div>
        <?php
        include("db.php");
        session_start();
        
        if (isset($_POST['submit'])) {
            extract($_POST);
            include "db.php";
            $sql = mysqli_query($connect, "SELECT * FROM `wordpress` WHERE  Email='$email' and Password=$pswd ");
            $row  = mysqli_fetch_array($sql);
            if (is_array($row)) {
                $_SESSION["ID"] = $row['ID'];
                header("Location: wp_login.php");
            } else {
                echo "Invalid Email ID/Password";
            }
        }
        ?>
    </div>
</body>

</html>