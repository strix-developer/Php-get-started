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
    <div class="container col-sm-6 mt-3 bg-light">
        <h2>Please Log in</h2>
        <form action="#" class="was-validated" method="POST">
            <!-- Gmail-->
            <div class="mb-3">
                <label for="Gmail">Gmail:</label>
                <input type="Gmail" class="form-control" id="Gmail" placeholder="Enter Gmail" name="Gmail" required>
            </div>
            <!-- Cpswd-->
            <div class="mb-3">
                <label for="confirm pwd">Confirm Password:</label>
                <input type="password" class="form-control" id="confirm pwd" placeholder="Confirm password" name="confirm pswd" required>
            </div>
            <!-- Rm-->
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> Remember me
                </label>
            </div>
            <!-- Log in Button-->
            <a href="#"> <button type="Login" class="navbar-dark bg-dark text-white img-thumbnail">Login</button></a>
            <br>
        </form>
    </div>
</body>

</html>