<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Third page</title>
</head>

<body>
    <div class="col-sm-12">
        <!--Logo of word press-->
        <img src="images/w-logo-blue.png" alt="avatar" class="rounded-circle img-fluid mx-auto d-block ">
        <div class="mb-3 col-sm-6 mx-auto d-block alert alert-dark rounded">
            <p class="col-sm-12 mx-auto d-block">Below you should enter your database connection details. If you are not sure about these, contact your host.</p>

            <form action="error.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="database name" class="col-sm-2 col-form-label">Database:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="database name" placeholder="Database Name" name="database">
                        The name of the database you want to use with WordPress.
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Username" class="col-sm-2 col-form-label">User Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Username" placeholder="User Name" name="username">
                        Your database username.
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        Your database password.
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dbhost" class="col-sm-2 col-form-label">Database host:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dbhost" placeholder="Database host" name="hostname">
                        You should be able to get this info from your web host, if localhost does not work.
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tableprefex" class="col-sm-2 col-form-label">Table Prefex:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tableprefex" placeholder="Table Prefex">
                        If you want to run multiple WordPress installations in a single database, change this.
                    </div>
                </div>
                <div class="mb-3 col-sm-12 mx-auto d-block ">
                     <input type="submit" class="btn btn-dark" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>