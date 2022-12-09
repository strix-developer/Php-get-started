
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
         body {
             background-image: url('images/mount.jpg');
             background-repeat: no-repeat;
            background-position: center center;
         }

        .col-sm-3.p-3.bg-dark.rounded-pill {
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
                                     <a class="nav-link text-dark" href="#">Menu</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link text-dark" href="#">About</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link text-dark" href="#">Contact</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link text-dark" href="#">Services</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link text-dark" href="#">Blog</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link text-dark" href="#">Reservation</a>
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
    <div class="container col-sm-12 mt-3 bg-image p-2 text-white ">
        <h2 class=" bg-image text-secondary rounded-pill text-center ">Edit Profile</h2>
        <form action="login_page.php" method="post">
        <?php
        session_start();
            include 'mysql.php';
            $ID = $_SESSION['ID'];
            $showquery = "SELECT * FROM signup where ID=$ID";
            $showdata = mysqli_query($connect, $showquery);
            $arrdata = mysqli_fetch_array($showdata);
            ?>
            <div class="form-group mb-3 mt-3 text-start">
                <img class=" rounded-end rounded-start align-center" src="Upload data/<?php echo $arrdata['File']; ?>" style="width:200px ;"><br>
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
            </div>
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
                <label for="role">Role:</label>
                <input type="role" class="form-control" id="role" value=" <?Php echo $_SESSION['role']; ?>" name="role" >
            </div>
            <div class="mb-3">
                <input type="submit" class="navbar-dark bg-dark text-white img-thumbnail " name="submit" value="Submit">
                <input type="hidden" name="action" value="profile">
            </div>
        </form>


        <?php
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $pswd = $_POST['password'];
            $number = $_POST['number'];
            $role = $_POST['role'];
            $file = $_FILES['image']['name'];
            $image = $_POST['image'];

            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
                $image_size = $_FILES["image"]["size"];
                $tmp_name = $_FILES["image"]["tmp_name"];
                $image_type = $_FILES['image']['type'];
                $image_name = $_FILES["image"]["name"];

                unlink("/Upload data/ $image");
                move_uploaded_file($tmp_name, "/Upload data $image_data");
            } else {
                $image_data = $image;
            }
            $sql = "UPDATE `signup` SET `ID`='$ID',`First Name`='$name',`Last Name`='$lastname',`Email`='$email',`Password`='$pswd',`Phone Number`='$number',`Role`='$role',`File`='$file' WHERE ID='$ID' ";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                echo "<h3>Profile Updated Successfully!</h3>";
            } else {
                echo "Profile Was Not Updated Successfully because of this error --->" . mysqli_error($connect);
            }
        }
        ?>