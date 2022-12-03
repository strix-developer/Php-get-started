<?php
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

//create a connection
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connnect: " . mysqli_connect_error($conn));
} else {
    echo "Connection was successful!<br>";
}

//Create a db
$sql = "CREATE DATABASE practice";
$result = mysqli_query($conn, $sql);

//Check for the database creation successful
if ($result) {
    echo "The db was created successfully!";
} else {
    echo "The db was not created successfully because of this error --->" . mysqli_error($conn);
}
