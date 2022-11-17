<?php
session_start();
require_once __DIR__ . "/Core/Support/action/logininfo.php";
require __DIR__ . "/Bootsstrap/App.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        button.btn.btn-light {
            float: right;
        }

        .nav-tabs {
            --bs-nav-tabs-border-color: #dee2e6;
            --bs-nav-tabs-border-radius: 0.375rem;
            --bs-nav-tabs-link-hover-border-color: #e9ecef #e9ecef #dee2e6;
            --bs-nav-tabs-link-active-color: #495057;
            --bs-nav-tabs-link-active-bg: #fff;
            --bs-nav-tabs-link-active-border-color: #dee2e6 #dee2e6 #fff;
            border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color);
            width: 514px;
        }
    </style>
</head>

<body>
    <header>
        <div class="container-fluid bg-dark rounded-pill">
            <div class="row">
                <div class="col-sm-1 p-3 bg-dark rounded-pill">
                    <a class="navbar-brand p-3" href="index.php">
                        <img src="./images/5796282.webp" alt="Logo" style="width:70px;" class="rounded-pill">
                    </a>
                </div>
                <div class="col-sm-2 p-3">
                    <a class="navbar-brand text-white text-center" href="#">
                        <h2>Himanshu Thakur</h2>
                    </a>
                </div>
                <div class="col-sm-6 bg-info text-white rounded-pill img-thumbnail">
                    <nav class="navbar navbar-expand-sm bg-dark text-white rounded-pill p-2 m-1 justify-content-center">
                        <div class="col-sm-7 bg-dark text-white rounded-pill ">
                            <ul class="nav nav-tabs  ">
                                <li class="nav-item ">
                                    <a class="nav-link text-info" href="#">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-info" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-info" href="#">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-info" href="#">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-info" href="#">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-info" href="#">Reservation</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-sm-3 p-3 bg-dark rounded-pill">

                    <button type="button" class="btn btn-light dropdown-toggle p-2 rounded-pill" data-bs-toggle="dropdown">Register</button>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item " href="signup.php"> sign up</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container col-sm-6 mt-3 bg-info p-2">
        <h2 class=" bg-info text-white rounded-pill img-thumbnail text-center">Please Log in</h2>
        <form action="" method="POST">
            <!-- Gmail-->
            <div class="mb-3">
                <label for="email">Gmail:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Gmail" name="email">
            </div>
            <!-- pswd-->
            <div class="mb-3">
                <label for="pswd">Confirm Password:</label>
                <input type="password" class="form-control" id="pswd" placeholder=" Password" name="pswd">
            </div>
            <!-- Rm-->
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <!-- Log in Button-->
            <input class="btn btn-dark" type="submit" value="Login">
            <input type="hidden" name="action" value="header">

            <br>
        </form>
    </div>

</body>

</html>