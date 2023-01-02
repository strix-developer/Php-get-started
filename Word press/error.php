<?php

//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "admin";

//create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connnect: " . mysqli_connect_error($conn));
} else {
}
if (isset($_POST['submit'])) {
    $db = $_POST['database'];

    if ($db == $database) {
        header("location:install.php");
    } else {
        echo "<h4>Error establishing a database connection<br><br>

        This either means that the username and password information in<br>
        your wp-config.php file is incorrect or we can't contact the database<br>
       server at localhost. This could mean your host's database server is<br>
        down.<br><br>
        
        Are you sure you have the correct username and password?<br>
        
        Are you sure that you have typed the correct hostname?<br>
        
        Are you sure that the database server is running?</h4><br>";
    }
}