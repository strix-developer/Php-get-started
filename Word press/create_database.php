<?php
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername,$username,$password);
if(!$connect){
     die("Fail to connect".mysqli_connect_error($connect)) ;
}
else{
    echo "connected successfully<br>";
}
$sql = "CREATE DATABASE wordpress";
$result = mysqli_query($connect,$sql);
if($result){
    echo "database created";
}
else{
    echo "database not created ". mysqli_error($connect);
}

?>