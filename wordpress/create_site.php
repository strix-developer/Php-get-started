<?php
include("header.php");
?>

<div class="container-fluid col-sm-5 bg-light p-3">
    <h3>Welcome</h3>
    <hr>
    <p>Welcome to the famous five-minute WordPress installation process! Just fill in the information below and<br>
        you'll be on your way to using the most extendable and powerful personal publishing platform in the world.</p>
    <h3>Information needed</h3>
    <hr>
    <!--Form start-->
    <form action="insert_user.php" method="POST">
        Please provide the following information. Do not worry, you can always change these settings later.<br>

        <!--Site Title Lable-->
        <label for="sitetitle">
            <h5>Site Title</h5>
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="sitetitle" placeholder="Site Title" name="sitetitle"><br><br>

        <!--Username Lable-->
        <label for="username">
            <h5>Username</h5>
        </label>&nbsp;&nbsp;&nbsp;
        <input type="text" id="username" placeholder="username" name="username"><br>
        Usernames can have only alphanumeric characters, spaces, underscores, hyphens,<br>
        periods, and the @ symbol.<br><br>

        <!--Password Lable-->
        <label for="password">
            <h5>Password</h5>
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="password" id="password" placeholder="password" name="password"><br>
        <strong>Important:</strong> You will need this password to log in.
        Please store it in a secure location.<br><br>

        <!--Email Lable-->
        <label for="email">
            <h5>Your Email</h5>
        </label>&nbsp;&nbsp;
        <input type="email" id="email" placeholder="Email" name="email"><br>
        Double-check your email address before continuing.<br><br>

        <!--Search Engine Visibility Lable-->
        <h5>Search Engine<br> Visibility</h5>
        <label for="checkbox">
            <input type="checkbox" id="check" name="check">
            Discourage search engines from indexing this site<br>
            It is up to search engines to honor this request.<br>
            </lable>

            <!--Submit Button-->
            <input type="submit" id="submit" value="Install WordPress" name="submit" class="btn btn-light border-primary mt-3">
    </form>
</div>