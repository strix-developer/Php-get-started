<?php
include 'create_connection.php';

$id = $_FILES['ID'];
$delete_query = "DELETE FROM `users` WHERE ID='$id'";
$query = mysqli_query($conn, $delete_query);
header('loction: dashboard.php');