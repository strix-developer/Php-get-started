<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>fifth page</title>
</head>

<body>
    <div class="col-lg-12">
        <img src="images/w-logo-blue.png" alt="avatar" class="rounded-circle img-fluid mx-auto d-block ">
        <div class="mb-3 col-sm-6 mx-auto d-block alert alert-dark rounded">
            <h3 class="col-sm-12 mx-auto d-block ">Welcome</h3>
            <hr>
            <p class="col-sm-12 mx-auto d-block">Welcome to the famous five-minute WordPress installation process! Just fill in the information below and you’ll be on your way to using the most extendable and powerful personal publishing platform in the world.<br>
            </p>
            <h3 class="col-sm-12 mx-auto d-block ">Information Needed</h3>
            <hr>
            <p class="col-sm-12 mx-auto d-block">Please provide the following information. Do not worry, you can always change these settings later.<br>
            </p>
            <div class="form-group row">
                <label for="Sitetitle" class="col-sm-2 col-form-label">Site Title:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sitetitle" placeholder="Site title">
                </div>
            </div>
            <div class="form-group row">
                <label for="Username" class="col-sm-2 col-form-label">User Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Username" placeholder="User Name">
                    Usernames can have only alphanumeric characters, spaces, underscores, hyphens, periods, and the @ symbol.
                </div>
            </div>
            <div class="form-group row">
                <label for="Password" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="Password" placeholder="Password">
                    Important: You will need this password to log in. Please store it in a secure location.
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Your Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" placeholder="abc@gmail.com">
                    Double-check your email address before continuing.
                </div>
            </div><hr>
            <div class="form-group row">
                <label for="search engine" class="col-sm-2 col-form-label">Search engine visibility:</label>
                <div class="col-sm-10">
                <input type="checkbox" id="checkbox1" name="checkbox1" value="checkbox">
                    <label for="checkbox1">Discourage search engines from indexing this site
                        It is up to search engines to honor this request.</label>
                    <br>
                </div>
            </div>
            <div class="mb-3 col-sm-12 mx-auto d-block ">
                <a href="insert_login.php"><button type="button" class="navbar-dark bg-dark text-white  img-thumbnail "> Install Wordpress</button></a>
            </div>
        </div>
    </div>
</body>

</html>