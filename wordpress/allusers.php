<?php
session_start();
include('dasheader.php');
?>
<div class="container mt-3 p-4">
    <h3>Users
        <a href="adduser.php">
            <button type="submit" class="btn btn-outline-primary" name="submit">Add New</button>
        </a>
    </h3>

    <!--div for form data start-->
    <div class="container mt-3 text-center">

        <?php
        include 'create_connection.php';
        $ID = $_SESSION["ID"];
        $sql = mysqli_query($conn, "SELECT * FROM users where ID='$ID' ");
        $row  = mysqli_fetch_array($sql);
        ?>

        <!--table for data-->
        <table class="table bg-light table-hover table-borderless opacity-75">
            <?php
            if ($row['Role'] != 'admin') { ?>
                <tr class="table font-monospace">
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Posts</th>
                </tr>
                <?php
                $i = 1;
                $rows = mysqli_query($conn, "SELECT * FROM users ORDER BY id ASC");
                foreach ($rows as $row) : ?>
                    <!--Row for table data-->
                    <tr class="table font-monospace">
                        <?php $i++; ?>
                        <td><?php echo $row['Username']; ?> </td>
                        <td><?php echo $row['First Name']; ?>
                            <?php echo $row['Last Name']; ?>
                        </td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Role']; ?> </td>
                        <td><?php echo ""; ?> </td>
                    </tr>
                <?php endforeach; ?>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="form-group mt-5 text-end">
        <a href="dashboard.php">
            <button type="submit" class="btn btn-light" name="submit">Home Page</button>
        </a>
    </div>
</div>
<!--div for form data end-->