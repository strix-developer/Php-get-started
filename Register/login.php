<?php
session_start();
require_once __DIR__ . "/core/Support/action/login.php";
require_once __DIR__ . "/bootstrap/app.php";
require_once file_header();
?>
<style>
    body {
        background-image: url(images/background.webp);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        justify-content: center;
    }
</style>



<div class="container-fluid col-sm-4 mt-3 p-4 bg-light text-center rounded">
    <!--div for heading text-->
    <div class="container-fluid p-2 bg-dark text-center text-white text-capitalize">
        <h2>Login form</h2>
    </div>

    <!--form start-->
    <form action="" method="POST" id="form" enctype="multipart/form-data">
        <!--For name field-->


        <!--For Email field-->
        <div class="mb-3 mt-3 text-start">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>



        <!--For Password field-->
        <div class="mb-3 mt-3 text-start">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
        </div>

        <!--For Remember me field-->
        <div class="mb-3 mt-3 text-end">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>

        <!--For Submit field-->
        <div class="mb-3 mt-3 text-end">
            <input type="submit" class="btn btn-dark" value="Login" name="submit">
            <input type="hidden" name="action" value="login">
        </div>



    </form>
    <!--form end-->
</div>