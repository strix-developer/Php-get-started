<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!--navbar div-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/2441.jpg" alt="Logo" style="width:50px;" class="rounded-pill">
            </a>
        </div>
    </nav>

    <div class="container col-sm-3 mt-3 p-5 bg-success text-center rounded font-monospace">
        <!--div for heading text-->
        <div class="container-fluid p-2 bg-dark text-center text-white text-capitalize rounded">
            <h2>Please log in</h2>
        </div>
        <!--Form start-->
        <form action="insert_login.php" method="POST" enctype="multipart/form-data">
            <!--For Email field-->
            <div class="mb-3 mt-3 text-start">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
            </div>

            <!--For last Password field-->
            <div class="mb-3 mt-3 text-start">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="pass" placeholder="Enter your password" name="pass" required>
            </div>

            <!--For Remember me field-->
            <div class="mb-3 mt-3 text-end">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <!--For Submit field-->
            <div class="mb-3 mt-3 text-end">
                <input type="submit" class="btn btn-dark" value="Login" name="submit">
            </div>

            <div class="mb-3 mt-3 text-end">Don't have an account? <a href="create_form.php">
                    <input class="btn btn-dark" type="button" value="Register here"></a>
            </div>
        </form>
        <!--Form end-->
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</html>