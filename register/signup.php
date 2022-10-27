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
    <div class="container mt-3 bg-light">
        <h2>Sign up form</h2>
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="name">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your Last name" name="lname">
            </div>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="mb-3 mt-3">
                <label for="pwd">Confirm Password:</label>
                <input type="password" class="form-control" id="cpwd" placeholder="Confirm password" name="cpswd">
            </div>
            <div class="mb-3 mt-3">
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="One">Admin</option>
                    <option value="Two">Guest</option>
                    <option value="Three">User</option>
                </select>
            </div>
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
            <button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;&nbsp;
            <label for="user">Adready sign up/</label>
            <input class="btn btn-success" type="submit" value="Log in">
        </form>
    </div>
</body>

</html>