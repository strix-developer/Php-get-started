<?php
//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername,$username,$password);
//error on database
if(!$connect){
     die("Fail to connect".mysqli_connect_error($connect)) ;
}
//success on database
else{
    echo "connected successfully<br>";
}
//craete database
$sql = "CREATE DATABASE wordpress";
$result = mysqli_query($connect,$sql);
if($result){
    //database created
    echo "database created";
}
//database not created
else{
    echo "database not created ". mysqli_error($connect);
}

?>