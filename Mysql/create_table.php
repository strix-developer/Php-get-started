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

//Create a table in the database
$sql = "CREATE TABLE `data` (`serial_number` INT(10) NOT NULL AUTO_INCREMENT , 
      `first_name` VARCHAR(20) NOT NULL , `last_name` INT(20) NOT NULL ,
       `Email` INT(40) NOT NULL , PRIMARY KEY (`serial_number`)) ENGINE = InnoDB";

//Check for the table creation successful
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The table was created successfully!";
} else {
    echo "The table was not created successfully because of this error --->" . mysqli_error($conn);
}