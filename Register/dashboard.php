<?php
session_start();
realpath(__DIR__ . "/Bootsstrap/App.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .navbar-dark.bg-info.text-dark.img-thumbnail {
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
                    <nav class="navbar navbar-expand-sm bg-dark text-white rounded-pill p-2 m-1 justify-content-center">
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
                    <a href="/Register/index.php" button type="button" class="navbar-dark bg-info text-dark img-thumbnail ">Log out</button></a>
                </div>
            </div>
        </div>
    </header>
    <!--signin info Start-->
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-12 text-center p-2">
                <h2 class=" bg-info text-white rounded-pill img-thumbnail">Your signup information</h2>
                <table class="table table-bordered ">
                    <thead>
                        <!--table Start-->
                        <tr class="table-success">
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Gmail</th>
                            <th>Number</th>
                            <th>Password</th>
                            <th>Roles</th>
                            <th>ID</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <?php
                    //employ detail
                    if ($_SESSION['role'] != 'Admin') {
                    ?>
                        <tr class="table-info">
                            <td class="text-dark">
                                <?Php echo $_SESSION['name']; ?>
                            </td>
                            <td>
                                <?Php echo $_SESSION['lastname']; ?>
                            </td>
                            <td>
                                <?Php echo $_SESSION['email']; ?>
                            </td>
                            <td>
                                <?Php echo $_SESSION['number']; ?>
                            </td></br>
                            <td>
                                <?Php echo $_SESSION['pswd']; ?></br>
                            </td>
                            <td>
                                <?Php echo $_SESSION['role']; ?></br>
                            </td>
                            <td>
                                <?Php echo $_SESSION['ID']; ?></br>
                            </td>
                            <td>
                                <a href="editprofile.php"><input type="button" class="navbar-dark bg-dark text-info img-thumbnail table-light text-center " value="Edit profile"></a>
                            </td>
                        </tr>
                        <?php
                        //all employe detail 
                     } else {
                        if ($_SESSION['role'] == 'Admin') {
                            $users = json_decode(file_get_contents(__DIR__ . "/database/user.json"), true);
                            if (count($users) != 0) {
                                foreach ($users as $user) {
                        ?>
                                    <tr class="table-info">
                                        <td class="text-dark">
                                            <?Php echo $user['name']; ?>
                                        </td>
                                        <td>
                                            <?Php echo $user['lastname']; ?>
                                        </td>
                                        <td>
                                            <?Php echo $user['email']; ?>
                                        </td>
                                        <td>
                                            <?Php echo $user['number']; ?>
                                        </td></br>
                                        <td>
                                            <?Php echo $user['pswd']; ?></br>
                                        </td>
                                        <td>
                                            <?Php echo $user['role']; ?></br>
                                        </td>
                                        <td>
                                            <?Php echo $user['ID']; ?></br>
                                        </td>
                                        <td>
                                            <a href="editprofile.php"><input type="button" class="navbar-dark bg-dark text-info img-thumbnail table-light text-center" value="Edit profile"></a>
                                        </td>
                                    </tr>
                    <?php
                                }
                            }
                        }
                    }
                    ?>

                </table>
                <!--table end-->
            </div>
        </div>
    </div>
    <!--signin info end-->
</body>

</html>