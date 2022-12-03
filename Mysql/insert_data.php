<?php

//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "practice";

//create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connnect: " . mysqli_connect_error($conn));
} else {
    echo "Connection was successful!<br>";
}

$first_name = "jitesh";
$last_name = "thakur";
$email = "jitesh@gmail.com";
//sql query for data insert
$sql = "INSERT INTO `data` (`first_name`, `last_name`, `Email`)
 VALUES ('$first_name', '$last_name', '$email')";

//Check for the data inserted successfully
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "The record has been inserted successfully!";
} else {
    echo "The record was not inserted successfully because of this error --->" . mysqli_error($conn);
}
