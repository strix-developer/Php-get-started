<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password);
if(!$conn){
     die("Fail to connect".mysqli_connect_error($conn)) ;
}
else{
    echo "connected successfully<br>";
}
$sql = "CREATE DATABASE practice";
$result = mysqli_query($conn,$sql);
if($result){
    echo "database created";
}
else{
    echo "database not created ". mysqli_error($conn);
}

?>