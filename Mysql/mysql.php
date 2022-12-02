<?php
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername,$username,$password);
if(!$connect){
     die("Fail to connect".mysqli_connect_error($connect)) ;
}
else{
    echo "connected successfully";
}
?>