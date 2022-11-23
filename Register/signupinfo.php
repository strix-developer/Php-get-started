<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h3>Details</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>Gmail</th>
            <th>Number</th>
            <th>Password</th>
            <th>Role</th>
        </tr>
        <tr>
            <td><?Php echo $_POST['name']; ?></td> </br>
            <td><?Php echo $_POST['lastname']; ?> </br></td>
            <td> <?Php echo $_POST['gmail']; ?></td></br>
            <td> <?Php echo $_POST['number']; ?></td></br>
            <td> <?Php echo $_POST['pswd']; ?> </br></td>
            <td> <?Php echo $_POST['role']; ?> </br></td>
        </tr>
    </table>
</body>

</html>