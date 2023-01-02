<?php
//mysql connect
$servername = "localhost";
$username = "root";
$password = "";
$database = "wordpress";
$connect = mysqli_connect($servername,$username,$password,$database);
//fail to connect
if(!$connect){
     die("Fail to connect".mysqli_connect_error($connect)) ;
}
//success to connect
else{
    echo "";
}
?>