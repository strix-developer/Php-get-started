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
    <div class="container col-sm-4 mt-3 bg-light text-center">
        <h2>Please Log in</h2>
        <form action="#" method="POST">
            <div class="mb-3 mt-3 text-start">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email">
            </div>

            <div class="mb-3 mt-3 text-start">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="pass" placeholder="Enter your password" name="pass">
            </div>

            <div class="mb-3 mt-3 text-end">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <div class="mb-3 mt-3 text-end">
                <input  type="submit" class="btn btn-success" value="Log in">
                <input type="hidden" name="action" value="register">
            </div>
        </form>
    </div>
</body>

</html>

<?php
require_once __DIR__."/core/support/action/login.php";
?>