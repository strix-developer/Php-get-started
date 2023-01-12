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
<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu {
        margin-top: 0;
    }
</style>

<body>
    <header>

        <nav class="navbar navbar-expand-sm navbar-warning bg-warning text-dark">
            <div class="container-fluid ">
                <a class="navbar-brand" href="index.php"><img src="images/jitesh.jpg" width="200px" height="70px" class="rounded-pill" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse container-fluid col-sm-6" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">About us</a>
                        </li>
                    </ul>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit" class="btn btn-info">Search</button>
                    <div class="dropdown font-monospace ">
                        <?php
                        if (isset($_SESSION['email'])) {

                            echo "<h5>Welcome $_SESSION[name]&nbsp"
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
        </nav>


    </header>