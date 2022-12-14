<?php
session_start();

if (isset($_POST['submit'])) {
    extract($_POST);
    include 'create_connection.php';
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = mysqli_query($conn, "SELECT * FROM users where Email='$email' and Password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["first_name"] = $row['First Name'];
        $_SESSION["last_name"] = $row['Last Name'];
        $_SESSION["email"] = $row['Email'];
        $_SESSION["password"] = $row['Password'];
        $_SESSION["phone_number"] = $row['Phone Number'];
        $_SESSION["role"] = $row['Role'];
        $_SESSION["file"] = $row['File'];
        header("Location: dashboard.php");
    } else {
        echo "<h3>Invalid Email ID/Password</h3>";
    }
}
