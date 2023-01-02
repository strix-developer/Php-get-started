<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Seventh page</title>
</head>

<body>
    <div class="col-lg-12">
        <!--Logo of word press-->
        <img src="images/w-logo-blue.png" alt="avatar" class="rounded-circle img-fluid mx-auto d-block ">
        <!--form start-->
        <form action="insert_wp_login.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3 col-sm-4 mx-auto d-block alert alert-dark rounded">
                <!--user login tag-->
                <div class="mb-3 col-sm-5 mx-auto d-block text-start ">
                    <label for="username">UserName</label><br>
                    <input type="text" placeholder="Username" name="Username">
                </div>
                <!--user password-->
                <div class="mb-3 col-sm-5 mx-auto d-block text-start">
                    <label for="pswd">Password</label><br>
                    <input type="password" placeholder="Password" name="pswd"><br>
                </div>
                <!--checkbox-->
                <div class="mb-3 col-sm-5 mx-auto d-block text-center">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="checkbox">
                    <label for="checkbox1">Remenber Me</label>
                <!--submit button-->
                    <input type="submit" class="btn btn-dark" name="submit" value="Log in">
                </div>
            </div>
        </form>
    </div>
    
</body>

</html>