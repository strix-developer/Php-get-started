<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="practice";
$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die( "fail to connect" . mysqli_connect_error($conn));
}
else{
    echo "connected sucessfully <br>";
}

?>