<?php
session_start();
include_once(__DIR__ . "/Core/Support/Layout/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="navbar-dark bg-primary text-white img-thumbnail">Your signup information</h2>
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Gmail</th>
                        <th>Number</th>
                        <th>Password</th>
                    </tr>
                    <tr>
                        <td><?Php echo $_SESSION['name']; ?></td></br>
                        <td><?Php echo $_SESSION['lastname']; ?></td></br>
                        <td><?Php echo $_SESSION['gmail']; ?></td></br>
                        <td><?Php echo $_SESSION['number']; ?></td></br>
                        <td><?Php echo $_SESSION['pswd']; ?></br></td>
                    </tr>
                </table>
                <form action="signup.php" method="POST">
                    <input type="submit" class="navbar-dark bg-primary text-white img-thumbnail" value="Edit profile">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include_once(__DIR__ . "/Core/Support/Layout/footer.php");
?>