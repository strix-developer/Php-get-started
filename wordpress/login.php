<?php
session_start();
include("header.php");
?>

<div class="container-fluid col-sm-2 bg-light p-3">
    <form action="insert_login.php" method="POST" enctype="multipart/form-data">
        <!--For Email field-->
        <div class="mb-3 mt-3 text-start">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter your Username" name="username" required>
        </div>

        <!--For last Password field-->
        <div class="mb-3 mt-3 text-start">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="pass" placeholder="Enter your password" name="password" required>
        </div>

        <!--For Remember me field-->
        <div class="mb-3 mt-3 text-end">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>

        <!--For Submit field-->
        <div class="mb-3 mt-3 text-end">
            <input type="submit" class="btn btn-primary" value="Login" name="submit">
        </div>

    </form>
</div>