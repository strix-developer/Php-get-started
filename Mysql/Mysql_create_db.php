<?php
//connecting to the database
$servername = "localhost";
$username = "username";
$password = "password";

//create a connection
$conn = mysqli_connect($servername, $username, $password);

//Create a db
$sql = "CREATE DATABASE anil092";
$result = mysqli_query($conn, $sql);

//Check for the database creation successful
if ($result) {
    echo "The db was created successfully!";
} else {
    echo "The db was not created successfully because of this error --->" . mysqli_error($conn);
}
