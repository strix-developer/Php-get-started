<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysqli Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(images/forest.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .card img {
            border-radius: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        .fa-solid {
            color: blue;
        }

        .fa-sharp {
            color: red;
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
                    <a href="#" style="text-decoration:none ;color:white">
                        <h1>
                            Mysqli_Database
                        </h1>
                    </a>
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

    <div class="container">
        <?php
        include 'create_connection.php';
        $ID = $_SESSION["ID"];
        $sql = mysqli_query($conn, "SELECT * FROM users where ID='$ID' ");
        $row  = mysqli_fetch_array($sql);
        ?>

        <!--div for Profile photo start-->
        <div class=" col-sm-4 m-3 text-center">
            <div class="card bg-light" style="--bs-bg-opacity: .3">
                <img src="upload/<?php echo $row['File'] ?>" height="300px" width="300px">
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $_SESSION['first_name']; ?>&nbsp;
                        <?php echo $_SESSION['last_name']; ?>
                    </h4>
                </div>
            </div>
        </div>

        <!--div for form data start-->
        <div class="container mt-3 text-center">
            <!--div for heading-->
            <div class="container-fluid p-2 bg-primary text-center" style="--bs-bg-opacity: .5">
                <h2>Profile Information</h2>
            </div>

            <!--table for data-->
            <table class="table bg-light table-hover table-borderless opacity-75">
                <?php
                $rows = mysqli_query($conn, "SELECT * FROM users");
                if ($row['Role'] != 'admin') {
                ?>
                    <!--Row for table headings-->
                    <tr class="table font-monospace">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                        <th>Image</th>
                        <th>Update</th>

                    </tr>
                    <tr class="table font-monospace">
                        <td><?php echo $row['ID']; ?> </td>
                        <td><?php echo $row['First Name']; ?> </td>
                        <td><?php echo $row['Last Name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Password']; ?></td>
                        <td><?php echo $row['Phone Number']; ?> </td>
                        <td><?php echo $row['Role']; ?> </td>
                        <td><?php echo $row['File'] ?> </td>
                        <td>
                            <a href="updateprofile.php?ID=<?php echo $row['ID']; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                    </tr>

                    <?php
                } else {
                    if ($_SESSION['role'] == 'admin') { ?>
                        <tr class="table font-monospace">
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone Number</th>
                            <th>Role</th>
                            <th>Image</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        $i = 1;
                        $rows = mysqli_query($conn, "SELECT * FROM users ORDER BY id ASC");
                        foreach ($rows as $row) : ?>
                            <!--Row for table data-->
                            <tr class="table font-monospace">
                                <?php $i++; ?>
                                <td><?php echo $row['ID']; ?> </td>
                                <td><?php echo $row['First Name']; ?> </td>
                                <td><?php echo $row['Last Name']; ?></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><?php echo $row['Password']; ?> </td>
                                <td><?php echo $row['Phone Number']; ?></td>
                                <td><?php echo $row['Role']; ?> </td>
                                <td><?php echo $row['File']; ?> </td>
                                <td>
                                    <a href="updateprofile.php?ID=<?php echo $row['ID']; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="deleteprofile.php?ID=<?php echo $row['ID']; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" onclick='return checkdelete()'>
                                        <i class="fa-sharp fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                <?php
                    }
                }
                ?>

            </table>
        </div>
        <!--div for form data end-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/9197b39465.js" crossorigin="anonymous"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    <script>
        function checkdelete() {
            return confirm('Are you sure you want to Delete this Profile ?');
        }
    </script>
</body>

</html>