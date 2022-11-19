<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <div class="container-fluid bg-dark rounded ">
            <div class="row">
                <!--Logo div-->
                <div class="col-sm-1 pt-2 bg-dark rounded text-center">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo.jpg" alt="Logo" style="width:105px ;" class="rounded-pill">
                    </a>
                </div>
                <!--Name div-->
                <div class="col-sm-2 p-3 bg-dark text-white rounded text-center">
                    <h1>
                        <a href="index.php" style="text-decoration:none ;color:white">
                            Bootstrap
                        </a>
                    </h1>
                </div>
                <!--Navbar div-->
                <div class="col-sm-7 p-3 bg-success text-white rounded-pill">
                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark rounded-pill border border-danger border-5">
                        <div class="container-fluid">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
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
                <div class="col-sm-2 p-4 bg-dark text-white text-end rounded">
                    <?php
                    if (isset($_SESSION['email'])) {

                        echo "<h5>Welcome $_SESSION[name]&nbsp"
                    ?>
                        <a href="logout.php">
                            <button type="button" class="btn btn-success">
                                Logout
                            </button>
                        </a>
                    <?php
                        "</h5>";
                    } else {
                    ?>
                        <div class="dropdown">
                            <button type="button" class="btn btn-success btn-lg dropdown-toggle" data-bs-toggle="dropdown">
                                Sign in
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