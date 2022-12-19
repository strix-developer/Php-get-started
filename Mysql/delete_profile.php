<?php
session_start();
include 'mysql.php';

$ID = $_GET["ID"];
$delete_query = "DELETE FROM `signup` WHERE ID='$ID'";
$query = mysqli_query($connect, $delete_query);
header('loction:dashboard.php');