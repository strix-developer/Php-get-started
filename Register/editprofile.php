<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Header page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .col-sm-3.p-3.bg-dark.rounded-pill {
            float: right;
        }
    </style>


</head>

<body>
    <header>
        <div class="container-fluid bg-dark rounded-pill ">
            <div class="row">
                <div class="col-sm-1 p-3 bg-dark rounded-pill">
                    <a class="navbar-brand p-3" href="index.php">
                        <img src="./images/5796282.webp" alt="Logo" style="width:70px;" class="rounded-pill">
                    </a>
                </div>
                <div class="col-sm-2 p-3">
                    <a class="navbar-brand text-light text-center " href="index.php">
                        <h2>Himanshu Thakur</h2>
                    </a>
                </div>
                <div class="col-sm-6 bg-info text-white rounded-pill img-thumbnail">
                    <nav class="navbar navbar-expand-sm bg-dark text-white rounded-pill p-2 justify-content-center">
                        <div class="col-sm-7 bg-dark text-white rounded-end ">
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

                    <h3 class="text-white text-center text-center">Welcome <?php echo $_SESSION['name']; ?></h3>
                </div>
            </div>
        </div>
        </div>
    </header>
    <div class="container col-sm-6 mt-3 bg-info p-2  ">
        <h2 class=" bg-info text-white rounded-pill img-thumbnail text-center ">Edit Profile</h2>
        <form action="editprofile.php" method="post">
            <div class="mb-3 mt-3">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" id="name" value="<?php echo $_SESSION['name']; ?>" name="name">
            </div>
            <div class="mb-3">
                <label for="Last Name">Last Name:</label>
                <input type="text" class="form-control" id="lastname" value=" <?Php echo $_SESSION['lastname']; ?>" name="lastname">
            </div>
            <div class="mb-3">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" value=" <?Php echo $_SESSION['email']; ?>" name="email" disabled>
            </div>
            <div class="mb-3">
                <label for="Contact">Contact:</label>
                <input type="text" class="form-control" id="number" value=" <?Php echo $_SESSION['number']; ?>" name="number" maxlength="10" disabled>
            </div>
            <div class="mb-3">
                <label for="Age">Age:</label>
                <input type="text" class="form-control" id="age" placeholder="Edit Age" name="age" maxlength="3">
            </div>
            <div class="mb-3">
                <label for="Aadhar">Aadhar:</label>
                <input type="text" class="form-control" id="Aadhar" placeholder="Enter Aadhar number " name="aadhar" maxlength='12'>
            </div>
            <div class="mb-3">
                <label for="PAN card">PAN Card:</label>
                <input type="text" class="form-control" id="Pancard" placeholder="Enter PAN Card" name="pancard" maxlength="12">
            </div>
            <div class="mb-3">
                <label for="Address">Address:</label>
                <input type="text" class="form-control" id="Address" placeholder="Enter your address" name="address">
            </div>
            <div class="mb-3">
                <label for="City">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city">
            </div>
            <div class="mb-3">
                <label for="Zip-Code">Zip-code:</label>
                <input type="text" class="form-control" id="zipcode" placeholder="Enter your zipcode" name="zipcode">
            </div>
            <div class="mb-3">
                <label for="Country">Country:</label>
                <input type="text" class="form-control" id="Country" placeholder="Enter your Country" name="country">
            </div>
            <div class="mb-3">
            <input type="submit" class="navbar-dark bg-dark text-white img-thumbnail " name="submit" value="Submit">
                <input type="hidden" name="action" value="dashboard">
            </div>
        </form>
        <?php
        require_once __DIR__."/Core/Support/action/profile.php";
        ?>