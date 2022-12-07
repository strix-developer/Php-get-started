<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "practice";
$connect = mysqli_connect($servername,$username,$password,$database);
if(!$connect){
     die("Fail to connect".mysqli_connect_error($connect)) ;
}
else{
    echo "";
}
?>