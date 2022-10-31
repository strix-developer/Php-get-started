<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    require_once __DIR__ . "/core/support/layout/header.php";
    ?>

    <div class="container-fluid col-sm-5 mt-3 bg-light text-center">
        <h2>Sign up form</h2>
        <form action="" method="POST" id="form">
            <div class="mb-3 mt-3 text-start">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
            </div>
            <div class="mb-3 mt-3 text-start">
                <label for="name">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your Last name" name="lname">
            </div>
            <div class="mb-3 mt-3 text-start">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3 text-start">
                <label for="pass">Password:</label>
                <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
            </div>
            <div class="mb-3 mt-3 text-start">
                <label for="con-pass">Confirm Password:</label>
                <input type="password" class="form-control" id="con-pass" placeholder="Confirm password" name="con-pass">
            </div>
            <div class="mb-3 mt-3 text-start">
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="admin">Admin</option>
                    <option value="guest">Guest</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="mb-3 mt-3 text-end">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
                <input type="submit" class="btn btn-success" id="submit" name="submit">
                <input type="hidden" name="action" value="register">
            </div>
            <div class="mb-3 mt-3 text-end">
                <label for="user">Adready sign up/</label>
                <a href="login.php"> <input class="btn btn-success" type="button" value="Log in"></a>
        </form>
    </div>
</body>

</html>
<?php
require_once __DIR__ . "/core/support/action/register.php";
?>