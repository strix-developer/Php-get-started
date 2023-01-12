<?php
session_start();
require_once __DIR__ . "/bootstrap/app.php";
require_once file_header();
?>
<style>
    body {
        background-image: url(images/sun.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        justify-content: center;
    }
</style>
<!--div for Profile photo start-->
<div class="container mt-3 text-center">
    <div class="card col-sm-3">
        <img class="card-img-top" src="images/logo.png" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">
                <?php echo $_SESSION['name']; ?>
            </h4>

        </div>
    </div>
</div>
<!--div for Profile photo end-->

<!--div for form data start-->
<div class="container mt-3 text-center bg-light">
    <!--div for heading-->
    <div class="container-fluid p-2 bg-dark text-center text-white">
        <h2>Profile Information</h2>
    </div>

    <!--table for data-->
    <table class="table table-hover table-bordered">

        <?php
        $users = json_decode(file_get_contents(__DIR__ . "/database/profile.json"), true);
        foreach ($users as $user) {
        }
        ?>
        <!--Row for table headings-->
        <tr>
            <th class="table-success font-monospace">First Name</th>
            <td class="table-primary font-monospace"><?php echo $_SESSION['name']; ?> </td>
        </tr>

        <tr>
            <th class="table-success font-monospace">Phone Number</th>
            <td class="table-primary font-monospace"><?php echo $_SESSION['number']; ?></td>
        </tr>
        <tr>
            <th class="table-success font-monospace">Email</th>
            <td class="table-primary font-monospace"><?php echo $_SESSION['email']; ?></td>
        </tr>
        <tr>
            <th class="table-success font-monospace">Password</th>
            <td class="table-primary font-monospace"><?php echo $_SESSION['pass']; ?> </td>
        </tr>
        <tr>
            <th class="table-success font-monospace">Role</th>
            <td class="table-primary font-monospace"><?php echo $_SESSION['role']; ?> </td>
        </tr>
        <tr>
            <th class="table-success font-monospace">ID</th>
            <td class="table-primary font-monospace"><?php echo $_SESSION['ID']; ?> </td>
        </tr>
        <tr>
            <th class="table-success font-monospace">Age</th>
            <td class="table-primary font-monospace"><?php echo $user['Age'] ?> </td>
        </tr>
        <tr>
            <th class="table-success font-monospace">Date Of Birth</th>
            <td class="table-primary font-monospace"><?php echo $user['Date Of Birth']; ?> </td>
        </tr>
        <tr>
            <th class="table-success font-monospace">Aadhar Card</th>
            <td class="table-primary font-monospace"><?php echo $user['Aadhar Number']; ?> </td>
        </tr>
        <tr>
            <th class="table-success font-monospace">Address</th>
            <td class="table-primary font-monospace"><?php echo $user['Address']; ?> </td>
        </tr>
        <tr>
            <th class="table-success font-monospace">City</th>
            <td class="table-primary font-monospace"><?php echo $user['City']; ?> </td>
        </tr>
        <tr>
            <th class="table-success font-monospace">State</th>
            <td class="table-primary font-monospace"><?php echo $user['State']; ?> </td>
        </tr>
        <tr>
            <th class="table-success font-monospace">Zip-code</th>
            <td class="table-primary font-monospace"><?php echo $user['Zip']; ?> </td>
        </tr>
        <tr>
            <th class="table-success font-monospace">Country</th>
            <td class="table-primary font-monospace"><?php echo $user['Country']; ?> </td>
        </tr>
        <tr>
            <th class="table-success"></th>
            <td class="table-primary font-monospace">
                <a href="dashboard.php"> <button type="button" class="btn btn-success">↽ Back</button></a>
            </td>
        </tr>

    </table>
</div>