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
            min-height: 100vh;
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
                            Mysqli_Database
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
                                <li><a class="dropdown-item" href="create_login.php">Login</a></li>
                                <li><a class="dropdown-item" href="create_signup.php">Sign up</a></li>
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

    <!--Sign up form div start-->
    <div class="container-fluid col-sm-4 mt-4 p-4 text-center rounded font-monospace" style="background-color: rgb(240,255,255,.2)">
        <!--div for heading text-->
        <div class="container-fluid p-2 bg-danger text-center text-capitalize" style="--bs-bg-opacity: .5">
            <h2>Sign up form</h2>
        </div>

        <!--form start-->
        <form action="insert_signup.php" method="POST" id="form" enctype="multipart/form-data" class="font-monospace">
            <!--For name field-->
            <div class="mb-3 mt-3 text-start">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" pattern="[A-Za-z]{1,20}" placeholder="Enter your First name" name="first_name" required>
            </div>

            <!--For last name field-->
            <div class="mb-3 mt-3 text-start">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" pattern="[A-Za-z]{1,20}" placeholder="Enter Last name" name="last_name" required>
            </div>

            <!--For Email field-->
            <div class="mb-3 mt-3 text-start">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>

            <!--For Password field-->
            <div class="mb-3 mt-3 text-start">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
            </div>

            <!--For Phone number field-->
            <div class="mb-3 mt-3 text-start">
                <label for="phone_number">Phone Number:</label>
                <input type="number" class="form-control" id="phone_number" placeholder="Enter Phone Number" name="phone_number" min="0" maxlength="10" oninput="
                javascript: if (this.value.length > this.maxLength) this.value = 
                this.value.slice(0, this.maxLength);" required>
            </div>

            <!--For Role field-->
            <div class="mb-3 mt-3 text-start">
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="admin">Admin</option>
                    <option value="guest">Guest</option>
                    <option value="user">User</option>
                </select>
            </div>

            <!--div for file upload-->
            <div class="form-group mb-3 mt-3 text-start">
                <label for="Profile Photo">Profile Photo:</label><br>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="" required>
            </div>

            <!--For Remember me and Submit field-->
            <div class="mb-3 mt-3 text-end">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
                <input type="submit" class="btn btn-primary" id="submit" name="submit">
            </div>

            <!--For Log in field-->
            <div class="mb-3 mt-3 text-end">
                <label for="user">Adready have account/</label>
                <a href="create_login.php"> <input class="btn btn-primary" type="button" value="Log in"></a>
            </div>

        </form>
        <!--form end-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>