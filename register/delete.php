 <?php

    $data = file_get_contents('database/user.json');
    $json = json_decode($data, true);
    $new_filtered_array = array_filter($json, function ($element) {
        return $element['ID'] != $_GET['ID'];
    });
    // print_r($new_filtered_array);
    $array_encode = json_encode($new_filtered_array, JSON_PRETTY_PRINT);
    file_put_contents('database/user.json', $array_encode);

    //  delete profile
    $data = file_get_contents('database/user.json');
    $json = json_decode($data, true);
    $new_filtered_array = array_filter($json, function ($element) {
        return $element['ID'] != $_GET['ID'];
    });
    // print_r($new_filtered_array);
    $array_encode = json_encode($new_filtered_array, JSON_PRETTY_PRINT);
    file_put_contents('database/user.json', $array_encode);

    ?>