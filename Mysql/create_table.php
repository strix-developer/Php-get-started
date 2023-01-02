<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database ="practice";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
     die("Fail to connect".mysqli_connect_error($conn)) ;
}
else{
    echo "connected successfully<br>";
}
//create table in himanshu
$sql ="CREATE TABLE `signup_` (`ID` INT(10) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(50) NOT NULL , `Email` VARCHAR(50) NOT NULL , `Password` VARCHAR(10) NOT NULL , PRIMARY KEY (`ID`))";
$result = mysqli_query($conn,$sql);
if($result){
    echo "table created";
}
else{
    echo "table not created ". mysqli_error($conn);
}
?>
