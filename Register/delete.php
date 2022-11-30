<?php
 session_start();
	$id = $_SESSION['ID'];
 
	$getdata = json_decode(file_get_contents('user.json'),true);

	unset($getdata[$id]);
 
	$user = json_encode($getdata, JSON_PRETTY_PRINT);
	file_put_contents('user.json', $user);
  header ("location: signup.php");

?>