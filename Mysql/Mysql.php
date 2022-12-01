<?php

//connecting to the database
$servername = "localhost";
$username = "username";
$password = "password";

//create a connection
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connnect: " . mysqli_connect_error());
} else {
    echo "Connection was successful!";
}
