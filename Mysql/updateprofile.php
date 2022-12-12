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

    <!--Sign up form div start-->
    <div class="container-fluid col-sm-4 mt-3 p-4 text-center rounded" style="background-color: rgba(255, 255, 255, .3)">
        <!--div for heading text-->
        <div class="container-fluid p-2 bg-danger text-center text-white text-capitalize" style="--bs-bg-opacity: .5">
            <h2>Update Your Profile</h2>
        </div>

        <!--form start-->
        <form action="" method="POST" id="form" enctype="multipart/form-data" class="font-monospace">

            <!--Fetching profile information from database-->
            <?php
            include 'create_connection.php';
            $ID = $_GET['ID'];
            $showquery = "SELECT * FROM users where ID=$ID";
            $showdata = mysqli_query($conn, $showquery);
            $arrdata = mysqli_fetch_array($showdata);
            ?>

            <!--For name field-->
            <div class="mb-3 mt-3 text-start">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" patern="
                [A-Za-z]{1,20}" placeholder="Enter your First name" name="first_name" value="<?php echo $arrdata['First Name'] ?>">
            </div>

            <!--For last name field-->
            <div class="mb-3 mt-3 text-start">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" pattern="[A-Za-z]{1,20}" placeholder="Enter Last name" name="last_name" value="<?php echo $arrdata['Last Name'] ?>">
            </div>

            <!--For Email field-->
            <div class="mb-3 mt-3 text-start">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="
                <?php echo $arrdata['Email'] ?>">
            </div>

            <!--For Password field-->
            <div class="mb-3 mt-3 text-start">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="
                password" placeholder="Enter password" name="password" value="<?php echo $arrdata['Password'] ?>">
            </div>

            <!--For Phone number field-->
            <div class="mb-3 mt-3 text-start">
                <label for="phone_number">Phone Number:</label>
                <input type="number" class="form-control" id="
                phone_number" placeholder="Enter Phone Number" name="phone_number" min="0" maxlength="10" oninput="
                javascript: if (this.value.length > this.maxLength) this.value =
                this.value.slice(0, this.maxLength);" value="<?php echo $arrdata['Phone Number'] ?>">
            </div>

            <!--For Role field-->
            <div class="mb-3 mt-3 text-start">
                <label for="role">Role:</label>
                <input type="text" class="form-control" id="
                role" placeholder="Enter Role" name="role" value="<?php echo $arrdata['Role'] ?>">
            </div>

            <!--div for image upload-->
            <div class="form-group mb-3 mt-3 text-start">
                <img src="upload/<?php echo $arrdata['File']; ?>" style="width:80px; height:60px"><br>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                <input type="hidden" name="old_image" value="<?php echo $arrdata['File']; ?>">
            </div>

            <!--Submit field-->
            <div class="mb-3 mt-3 text-end">
                <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Update">
            </div>

            <!--Button for return back to your profile-->
            <div class="mb-3 mt-3 text-end">
                <a href="dashboard.php">
                    <input type="button" class="btn btn-primary" value="↽ Back To Profile Page">
                </a>
            </div>

        </form>
        <!--form end-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
//For updating the profile data
if (isset($_POST['submit'])) {

    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pnumber = $_POST['phone_number'];
    $role = $_POST['role'];
    $image_name = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        $old_image = $_POST['old_image'];
        $image_size = $_FILES["image"]["size"];
        $tmp_name = $_FILES["image"]["tmp_name"];
        $image_type = $_FILES['image']['type'];
        $image_name = $_FILES["image"]["name"];

        unlink("upload/$old_image");
        move_uploaded_file($tmp_name, "upload/$image_name");
    } else {
        $image_name = $old_image;
    }
    $sql = "UPDATE `users` SET `ID`='$ID',`First Name`='$fname',`Last Name`='$lname',`Email`='$email',`Password`='$pass',`Phone Number`='$pnumber',`Role`='$role',`File`='$image_name' WHERE ID='$ID' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<h3>Profile Updated Successfully!</h3>";
    } else {
        echo "Profile Was Not Updated Successfully because of this error --->" . mysqli_error($conn);
    }
}
?>