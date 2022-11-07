<?php
session_start();
require_once __DIR__."/Core/Support/action/logininfo.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php
  require_once "./Core/Support/Layout/header.php";
  ?>
    <div class="container col-sm-6 mt-3 bg-light">
        <h2>Please Log in</h2>
        <form action=""  method="POST">
            <!-- Gmail-->
            <div class="mb-3">
                <label for="email">Gmail:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Gmail" name="email" >
            </div>
            <!-- pswd-->
            <div class="mb-3">
                <label for="pswd">Confirm Password:</label>
                <input type="password" class="form-control" id="pswd" placeholder=" password" name="pswd">
            </div>
            <!-- Rm-->
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <!-- Log in Button-->
            <input class="btn btn-primary" type="submit" value="Login">
            <input type="hidden" name="action" value="header">

            <br>
        </form>
    </div>
  
</body>

</html>