<?php
session_start();
require_once __DIR__ . "/bootstrap/app.php";
require_once file_header();
?>
<style>
    body {
        background-image: url(images/window.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        justify-content: center;
    }
</style>

<!--div for Profile photo start-->
<div class="container mt-3 text-center">
    <div class="card" style="width:300px; height:400px">

    <img src="<?php echo $_SESSION['picture']; ?>" alt="picture"/> 
           <div class="card-body">
            <h4 class="card-title">
                <?php echo $_SESSION['name']; ?>
            </h4>

        </div>
    </div>
</div>

<!--div for form data start-->
<div class="container mt-3 text-center bg-light">
    <!--div for heading-->
    <div class="container-fluid p-2 bg-dark text-center text-white">
        <h2>Profile Information</h2>
    </div>

    <!--table for data-->
    <table class="table table-striped">
        <thead>
            <!--Row for table headings-->
            <tr class="table-success font-monospace">
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Password</th>
                <th>Role</th>
                <th>ID</th>

            </tr>
        </thead>

        <tbody>
            <?php
            if ($_SESSION['role'] != 'admin') { // users login 
            ?>
                <!--Row for table data-->
                <tr class="font-monospace">
                    <td><?php echo $_SESSION['name']; ?> </td>
                    <td><?php echo $_SESSION['email']; ?></td>
                    <td><?php echo $_SESSION['number']; ?></td>
                    <td><?php echo $_SESSION['pass']; ?> </td>
                    <td><?php echo $_SESSION['role']; ?> </td>
                    <td><?php echo $_SESSION['ID']; ?> </td>
                    
                    <td>
                        <a href="profile.php?ID=<?php echo $_SESSION['ID']; ?>"> <button type="button" class="btn btn-primary">Edit Profile</button></a>
                    </td>
                    <td>
                        <a href="viewprofile.php?ID=<?php echo $_SESSION['ID']; ?>"> <button type="button" class="btn btn-primary">View Profile</button></a>
                    </td>
                    <td>
                        <a href="delete.php?ID=<?php echo $_SESSION['ID']; ?>"> <button type="button" class="btn btn-info">Delete Profile</button></a>
                    </td>
                </tr>
                <?php  } else {      //admin login and to show all users data
                if ($_SESSION['role'] == 'admin') {
                    $users = json_decode(file_get_contents(__DIR__ . "/Database/user.json"), true);

                    if (count($users) != 0) {
                        foreach ($users as $user) {
                ?>
                            <!--Row for table data-->
                            <tr>
                                <td><?php echo $user['Name']; ?> </td>
                                <td><?php echo $user['Email']; ?></td>
                                <td><?php echo $user['Number']; ?></td>
                                <td><?php echo $user['Password']; ?> </td>
                                <td><?php echo $user['Role']; ?> </td>
                                <td><?php echo $user['ID']; ?> </td>
                                <td>
                                    <a href="profile.php?ID=<?php echo $user['ID']; ?>"> <button type="button" class="btn btn-primary">Edit Profile</button></a>
                                </td>
                                <td>
                                    <a href="viewprofile.php?ID=<?php echo $user['ID']; ?>"> <button type="button" class="btn btn-primary">View Profile</button></a>
                                </td>
                                <td>
                                    <a href="delete.php?ID=<?php echo $user['ID']; ?>"> <button type="button" class="btn btn-info">Delete Profile</button></a>
                                </td>
                            </tr>
            <?php
                        }
                    }
                }
            }
            ?>

        </tbody>

    </table>

</div>
<!--div for form data end-->