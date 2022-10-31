<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>User Signed Up Information</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_POST['name']; ?> </td>
                    <td><?php echo $_POST['lname']; ?></td>
                    <td><?php echo $_POST['email']; ?></td>
                    <td><?php echo $_POST['pass']; ?> </td> 
                    <td><?php echo $_POST['role']; ?> </td> 
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>