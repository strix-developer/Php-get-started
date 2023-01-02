<?php
session_start();

if (isset($_POST['submit'])) {
    extract($_POST);
    include 'create_connection.php';
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = mysqli_query($conn, "SELECT * FROM website where Username='$user' and Password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["sitetitle"] = $row['Site Title'];
        $_SESSION["username"] = $row['Username'];
        $_SESSION["password"] = $row['Password'];
        $_SESSION["email"] = $row['Email'];
        header("Location: dashboard.php");
    } else {
        echo "<h3>Invalid Username/Password</h3>";
    }
}