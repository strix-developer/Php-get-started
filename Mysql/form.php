<!-- Start-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Header page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-image: url('images/img.jpg');
            background-repeat: no-repeat;
            background-position: center center;

        }

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
    <!--Header Started-->
    <header>
        <div class="container-fluid bg-image rounded-end rounded-start">

            <div class="row">
                <!--Png logo-->
                <div class="col-sm-1 p-3 bg-image rounded-pill">
                    <a class="navbar-brand p-3" href="form.php">
                        <img src="./images/5796282.webp" alt="Logo" style="width:80px;" class="rounded-pill">
                    </a>
                </div>

                <!--Name-->

                <!--Menu-->
                <div class="col-sm-8 bg-image text-white rounded-pill ">
                    <nav class="navbar navbar-expand-sm bg-image text-white rounded-pill p-2 m-1 justify-content-center">
                        <div class="col-sm-3 bg-image text-white rounded-pill ">
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
                <div class="col-sm-2 p-3">
                    <a class="navbar-brand text-white text-center" href="#">
                        <h2>Himanshu Thakur</h2>
                    </a>
                </div>
            </div>
    </header>
    <!--Header close-->
    <!--Sign in-->
    <div class="container col-sm-12 mt-3 bg-image p-2 justify-content-center" style="
            background-image:url('/images/wp5085421.webp')" ;>
        <h2 class=" bg-image text-white rounded-pill text-center">Please Sign in</h2>
        <!--sign up Form Started-->
        <form class="text-white" action="insert_data.php" method="POST" enctype="multipart/form-data">

            <!-- Name-->
            <div class="mb-3 mt-3">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>

            <!-- Last Name-->
            <div class="mb-3">
                <label for="Last Name">Last Name:</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
            </div>
            <!-- Phone Number-->
            <div class="mb-3">
                <label for="Last Name">Phone Number:</label>
                <input type="number" class="form-control" id="Number" placeholder="Enter Phone Number" name="number">
            </div>

            <!-- Gmail-->
            <div class="mb-3">
                <label for="email">Gmail:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Gmail" name="email">
            </div>
            <!-- Pswd-->
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
            </div>

            <!-- Role-->
            <label for="role">Roles:</label>
            <select id="role" name="role">
                <option value="User">User</option>
                <option value="Guest">Guest</option>
                <option value="Admin">Admin</option>
            </select>

            <div class="form-group mb-3 mt-3 text-start">
                <input type="file" name="file" id="image" accept=".jpg, .jpeg, .png" value="" required>
            </div>

            <!-- Rm-->
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <!-- Submit Button-->
            <input type="submit" name="submit" value="Submit" class="login-button navbar-dark bg-dark text-white img-thumbnail">
            <input type="hidden" name="action" value="register">
            </a>
            <br>

            <!-- Already-->
            <label class="Already Sign in">Already Sign in-></label>


            <!-- Log in Button-->
            <a href="login_page.php"><button type="button" class="navbar-dark bg-dark text-white  img-thumbnail ">Log in</button></a>
            <img class="text-end" src="images/Picsart_22-12-08_17-57-53-889_adobe_express.png" width="10%">
        </form>
        <!--Form end-->
    </div>