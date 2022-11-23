<?php
session_start();
realpath(__DIR__ . "/Bootsstrap/App.php");
require __DIR__ . "/Core/Support/Layout/header.php";
?>

<!--signin info Start-->
<div class="container-fluid ">
    <div class="row">
        <div class="col-sm-12 text-center p-2">
            <h2 class=" bg-info text-white rounded-pill img-thumbnail">Your signup information</h2>

            <!--Table satrt-->
            <table class="table table-bordered ">
                <thead>
                    <tr class="table-success">
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Gmail</th>
                        <th>Number</th>
                        <th>Password</th>
                        <th>Roles</th>
                        <th>ID</th>
                        <th>Edit</th>
                    </tr>
                </thead>

                <?php
                //employ detail
                if ($_SESSION['role'] != 'Admin') {
                ?>
                    <tr class="table-info">
                        <td class="text-dark">
                            <?Php echo $_SESSION['name']; ?>
                        </td>
                        <td>
                            <?Php echo $_SESSION['lastname']; ?>
                        </td>
                        <td>
                            <?Php echo $_SESSION['email']; ?>
                        </td>
                        <td>
                            <?Php echo $_SESSION['number']; ?>
                        </td></br>
                        <td>
                            <?Php echo $_SESSION['pswd']; ?></br>
                        </td>
                        <td>
                            <?Php echo $_SESSION['role']; ?></br>
                        </td>
                        <td>
                            <?Php echo $_SESSION['ID']; ?></br>
                        </td>
                        <td>
                            <a href="editprofile.php"><input type="button" class="navbar-dark bg-dark text-info img-thumbnail table-light text-center " value="Edit profile"></a>
                        </td>
                    </tr>

                    <?php
                    //admin page 
                } else {
                    if ($_SESSION['role'] == 'Admin') {
                        $users = json_decode(file_get_contents(__DIR__ . "/database/user.json"), true);
                        if (count($users) != 0) {
                            foreach ($users as $user) {
                    ?>
                                <tr class="table-info">
                                    <td class="text-dark">
                                        <?Php echo $user['name']; ?>
                                    </td>
                                    <td>
                                        <?Php echo $user['lastname']; ?>
                                    </td>
                                    <td>
                                        <?Php echo $user['email']; ?>
                                    </td>
                                    <td>
                                        <?Php echo $user['number']; ?>
                                    </td></br>
                                    <td>
                                        <?Php echo $user['pswd']; ?></br>
                                    </td>
                                    <td>
                                        <?Php echo $user['role']; ?></br>
                                    </td>
                                    <td>
                                        <?Php echo $user['ID']; ?></br>
                                    </td>
                                    <td>
                                        <a href="editprofile.php"><input type="button" class="navbar-dark bg-dark text-info img-thumbnail table-light text-center" value="Edit profile"></a>
                                    </td>
                                </tr>
                <?php
                            }
                        }
                    }
                }
                ?>
            </table>
            <!--table end-->
        </div>
    </div>
</div>
<!--signin info end-->
</body>

</html>