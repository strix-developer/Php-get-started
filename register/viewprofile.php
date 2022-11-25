<?php
session_start();
require_once __DIR__ . "/bootstrap/app.php";
require_once file_header();
?>

<!--div for Profile photo start-->
<div class="container mt-3 text-center">
    <div class="card col-sm-3">
        <img class="card-img-top" src="images/avatar.png" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">
                <?php echo $_SESSION['name']; ?>&nbsp;
                <?php echo $_SESSION['lname']; ?>
            </h4>

        </div>
    </div>
</div>
<!--div for Profile photo end-->

<!--div for form data start-->
<div class="container mt-3 text-center bg-light">
    <!--div for heading-->
    <div class="container-fluid p-2 bg-dark text-center text-white">
        <h2>Your Profile Information</h2>
    </div>

    <!--table for data-->
    <table class="table table-striped">

        <!--Row for table headings-->
        <tr class="table-danger">
            <th>First Name</th>
            <td><?php echo $_SESSION['name']; ?> </td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><?php echo $_SESSION['lname']; ?></td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td><?php echo $_SESSION['number']; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $_SESSION['email']; ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo $_SESSION['pass']; ?> </td>
        </tr>
        <tr>
            <th>Role</th>
            <td><?php echo $_SESSION['role']; ?> </td>
        </tr>
        <tr>
            <th>ID</th>
            <td><?php echo $_SESSION['ID']; ?> </td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?php echo $_POST['age']; ?> </td>
        </tr>
        <tr>
            <th>Date Of Birth</th>
            <td><?php echo $_POST['dob']; ?> </td>
        </tr>
        <tr>
            <th>Aadhar Card</th>
            <td><?php echo $_POST['aadhar']; ?> </td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $_POST['address']; ?> </td>
        </tr>
        <tr>
            <th>City</th>
            <td><?php echo $_POST['city']; ?> </td>
        </tr>
        <tr>
            <th>State</th>
            <td><?php echo $_POST['state']; ?> </td>
        </tr>
        <tr>
            <th>Zip-code</th>
            <td><?php echo $_POST['zip']; ?> </td>
        </tr>
        <tr>
            <th>Country</th>
            <td><?php echo $_POST['country']; ?> </td>
        </tr>
    </table>
</div>
<!--div for form data end-->