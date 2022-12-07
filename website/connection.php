<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= 'newdb';

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// // Create database
// $sql = "CREATE DATABASE himachal";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }


// //create table
// $table= "CREATE TABLE `newdb`.`signupuser` (`ID` INT(11) NOT NULL , `name` VARCHAR(11) NOT NULL , `email` VARCHAR(16) NOT NULL , `address` VARCHAR(40) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;
// ";
// if ($conn->query($table) === TRUE) {
//     echo "Table signupuser created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }

// //insert data
$data ="INSERT INTO `signupuser` (`ID`, `name`, `email`, `address`) VALUES ('12', 'tssafet', 'anASEWil@gmail.com', 'kanAWRgra');";
$data ="INSERT INTO `signupuser` (`ID`, `name`, `email`, `address`) VALUES ('13', 'tsasfcet', 'aniSAFl@gmail.com', 'kanSAFDgra');";
$data ="INSERT INTO `signupuser` (`ID`, `name`, `email`, `address`) VALUES ('14', 'tsasSDEGTGet', 'aniFASFl@gmail.com', 'kanXZFCgra');";

if($conn->multi_query($data) === TRUE) {
    echo "data inserted successfully";
  } else {
    echo "Error inserting data: " . $conn->error;
  }


mysqli_close($conn);
?>