<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!--navbar div-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark text-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/2441.jpg" alt="Logo" style="width:50px;" class="rounded-pill">
            </a>
        </div>
        <h2>Welcome!</h2>
    </nav>

    <div class="container">
        <?php
        include 'create_connection.php';
        $ID = $_SESSION["ID"];
        $sql = mysqli_query($conn, "SELECT * FROM users where ID='$ID' ");
        $row  = mysqli_fetch_array($sql);
        ?>

        <!--div for Profile photo start-->
        <div class=" col-sm-4 m-3 text-center">
            <div class="card">
                <img src="upload/<?php echo $row['File'] ?>" height="300px" width="300px" style="border-radius:50%;display:block;margin-left:auto;margin-right:auto;" />
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $_SESSION['first_name']; ?>&nbsp;
                        <?php echo $_SESSION['last_name']; ?>
                    </h4>
                    <div class="text-center"><a href="logout.php"> <input class="btn btn-danger" type="button" value="Logout"></a></div>
                </div>

            </div>
        </div>


        <!--div for form data start-->
        <div class="container mt-3 text-center bg-body">
            <!--div for heading-->
            <div class="container-fluid p-2 bg-dark text-center text-white">
                <h2>Profile Information</h2>
            </div>

            <!--table for data-->
            <table class="table table-hover table-borderless">
                <?php
                $rows = mysqli_query($conn, "SELECT * FROM users");
                if ($row['Role'] != 'admin') {
                ?>
                    <!--Row for table headings-->
                    <tr>
                        <th class="table-success font-monospace">ID</th>
                        <td class="table-primary font-monospace"><?php echo $row['ID']; ?> </td>
                    </tr>
                    <tr>
                        <th class="table-success font-monospace">First Name</th>
                        <td class="table-primary font-monospace"><?php echo $row['First Name']; ?> </td>
                    </tr>
                    <tr>
                        <th class="table-success font-monospace">Last Name</th>
                        <td class="table-primary font-monospace"><?php echo $row['Last Name']; ?></td>
                    </tr>
                    <tr>
                        <th class="table-success font-monospace">Email</th>
                        <td class="table-primary font-monospace"><?php echo $row['Email']; ?></td>
                    </tr>
                    <tr>
                        <th class="table-success font-monospace">Password</th>
                        <td class="table-primary font-monospace"><?php echo $row['Password']; ?></td>
                    </tr>
                    <tr>
                        <th class="table-success font-monospace">Phone Number</th>
                        <td class="table-primary font-monospace"><?php echo $row['Phone Number']; ?> </td>
                    </tr>
                    <tr>
                        <th class="table-success font-monospace">Role</th>
                        <td class="table-primary font-monospace"><?php echo $row['Role']; ?> </td>
                    </tr>

                    <tr>
                        <th class="table-success font-monospace">Image</th>
                        <td class="table-primary font-monospace"><?php echo $row['File'] ?> </td>
                    </tr>
                    <?php
                } else {
                    if ($_SESSION['role'] == 'admin') { ?>
                        <tr class="table-primary font-monospace">
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone Number</th>
                            <th>Role</th>
                            <th>Image</th>
                        </tr>
                        <?php
                        $i = 1;
                        $rows = mysqli_query($conn, "SELECT * FROM users ORDER BY id ASC");
                        foreach ($rows as $row) : ?>
                            <!--Row for table data-->
                            <tr class="table-primary font-monospace">
                                <?php $i++; ?>
                                <td><?php echo $row['ID']; ?> </td>
                                <td><?php echo $row['First Name']; ?> </td>
                                <td><?php echo $row['Last Name']; ?></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><?php echo $row['Password']; ?> </td>
                                <td><?php echo $row['Phone Number']; ?></td>
                                <td><?php echo $row['Role']; ?> </td>
                                <td><?php echo $row['File']; ?> </td>
                            </tr>
                        <?php endforeach; ?>
                <?php
                    }
                }
                ?>

            </table>
        </div>
        <!--div for form data end-->
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</html>