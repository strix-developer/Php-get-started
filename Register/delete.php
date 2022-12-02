<?php
 session_start();
	$index = $_GET['index'];
 
	$users = json_decode(file_get_contents('/database/user.json'),true);

	unset($users[$index]);
 
	$users = json_encode($users, JSON_PRETTY_PRINT);
	file_put_contents('/database/user.json', $users);
header('location: index.php');
