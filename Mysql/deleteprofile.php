<?php
include 'create_connection.php';

if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    $delete_query = "DELETE FROM `users` WHERE ID='$id'";
    $query = mysqli_query($conn, $delete_query);

    header('location:dashboard.php');
}