<?php
 $data = file_get_contents('Database/user.json');
    $json = json_decode($data, true);
    $new_filtered_array = array_filter($json, function ($chiji) {
        return $chiji['ID'] != $_GET['ID'];
    });
    $array_encode = json_encode($new_filtered_array, JSON_PRETTY_PRINT);
    file_put_contents('Database/user.json', $array_encode);
	header('location: dashboard.php')
	?>