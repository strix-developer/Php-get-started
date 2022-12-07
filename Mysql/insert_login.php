<!DOCTYPE html>
<html lang="en">

<head>
    <title>Header page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        button.btn.btn-light {
            float: right;
        }

        .nav-tabs {
            --bs-nav-tabs-border-color: #dee2e6;
            --bs-nav-tabs-border-radius: 0.375rem;
            --bs-nav-tabs-link-hover-border-color: #e9ecef #e9ecef #dee2e6;
            --bs-nav-tabs-link-active-color: #495057;
            --bs-nav-tabs-link-active-bg: #fff;
            --bs-nav-tabs-link-active-border-color: #dee2e6 #dee2e6 #fff;
            border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color);
            width: 514px;
        }
    </style>

</head>
<?php
session_start();

if (isset($_POST['submit'])) {
    extract($_POST);
    include "mysql.php";
    $sql = mysqli_query($connect, "SELECT * FROM signup where Email='$email' and Password=$pswd");
    $row  = mysqli_fetch_array($sql);
    if (is_array($row)) {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["name"] = $row['Name'];
        $_SESSION["lastname"] = $row['Last Name'];
        $_SESSION["email"] = $row['Email'];
        $_SESSION["pswd"] = $row['Password'];
        $_SESSION["number"] = $row['Phone Number'];
        $_SESSION["role"] = $row['Role'];
        $_SESSION["file"] = $row['File'];
        header("Location: dashboard_page.php");
    } else {
        echo "Invalid Email ID/Password";
    }
}
?>

</html>