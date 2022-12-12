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
    <style>
        body {
            background-image: url(images/form.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>

<body>

    <!--Header div-->
    <header>
        <div class="container-fluid bg-dark rounded" style="--bs-bg-opacity: .2">
            <div class="row">
                <!--Logo div-->
                <div class="col-sm-1 pt-2 rounded text-center" style="--bs-bg-opacity: .2">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo.png" alt="Logo" style="width:90px ;" class="rounded-pill">
                    </a>
                </div>
                <!--Name div-->
                <div class="col-sm-2 p-3 text-white rounded text-center" style="--bs-bg-opacity: .2">
                    <h1>
                        <a href="#" style="text-decoration:none ;color:white">
                        Mysqli Database
                        </a>
                    </h1>
                </div>
                <!--Navbar div-->
                <div class="col-sm-6 p-3 text-white rounded-pill">
                    <nav class="navbar navbar-expand-sm bg-primary rounded-pill border border-danger border-5" style="--bs-bg-opacity: .2">
                        <div class="container-fluid">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--div for Sign in and Logout options-->
                <div class="col-sm-3 p-4 text-white text-end rounded" style="--bs-bg-opacity: .2">
                    <?php
                    if (isset($_SESSION['ID'])) {

                        echo "<h5>Welcome $_SESSION[first_name]&nbsp"
                    ?>
                        <a href="logout.php">
                            <button type="button" class="btn btn-danger font-monospace">
                                Logout
                            </button>
                        </a>
                    <?php
                        "</h5>";
                    } else {
                    ?>
                        <!--Sign in options div-->
                        <div class="dropdown font-monospace">
                            <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-bs-toggle="dropdown">
                                Sign In
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>
                                <li><a class="dropdown-item" href="signup.php">Sign up</a></li>
                            </ul>
                        </div>
                </div>
            <?php
                    }
            ?>
            </div>
        </div>

        </div>

    </header>

    <div class="container col-sm-3 mt-5 p-4 text-center rounded font-monospace" style="background-color: rgba(255, 255, 255, .3)">
        <!--div for heading text-->
        <div class="container-fluid p-2 bg-danger text-center text-capitalize rounded" style="--bs-bg-opacity: .3">
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
                <input type="submit" class="btn btn-primary" value="Login" name="submit">
            </div>

            <div class="mb-3 mt-3 text-end">Don't have an account? <a href="create_signup.php">
                    <input class="btn btn-primary" type="button" value="Register here"></a>
            </div>
        </form>
        <!--Form end-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>