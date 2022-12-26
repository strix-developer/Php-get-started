<?php
include("header.php");
?>

<div class="container col-sm-5 mt-3 bg-light p-3">
    <form action="connectdb.php" method="POST" enctype="multipart/form-data">
        <!--For Database field-->
        <div class="mb-3 mt-3 text-start">
            <label for="database">
                <h5>Database</h5>
            </label>
            <input type="text" class="form-control" id="databse" placeholder="Database" name="database">
            The name of the database you want to use with WordPress.
        </div>

        <!--For Username field-->
        <div class="mb-3 mt-3 text-start">
            <label for="username">
                <h5>Username</h5>
            </label>
            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            Your database username.
        </div>

        <!--For last Password field-->
        <div class="mb-3 mt-3 text-start">
            <label for="password">
                <h5>Password</h5>
            </label>
            <input type="password" class="form-control" id="pass" placeholder="Enter your password" name="password">
            Your database password.
        </div>

        <!--For Database Host field-->
        <div class="mb-3 mt-3 text-start">
            <label for="databasehost">
                <h5>Database Host</h5>
            </label>
            <input type="text" class="form-control" id="databasehost" value="localhost" name="localhost">
            You should be able to get this info from your
            web host, if localhost does not work
        </div>

        <!--For Table Prefix field-->
        <div class="mb-3 mt-3 text-start">
            <label for="tableprefix">
                <h5>Table Prefix</h5>
            </label>
            <input type="text" class="form-control" id="tableprefix" value="wp_" name="tableprefix">
            If you want to run multiple WordPress
            installations in a single database, change this.
        </div>

        <!--For Submit field-->
        <div class="mb-3 mt-3 text-end">
            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
        </div>
    </form>
</div>