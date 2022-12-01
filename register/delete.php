 <?php

    session_start();

    // read json file and decode json to associative array
    $data = json_decode(file_get_contents('/database/user.php'), true);

    // get array index to delete
    $arr_index = array();
    foreach ($data as $key) {
        if ($key['ID'] == $_SESSION['ID']) {
            $arr_index[] = $key;
        }
    }

    // delete data
    foreach ($arr_index as $i) {
        unset($data[$i]);
    }

    // rebase array
    $userdata = array_values($data);

    // encode array to json and save to file
    file_put_contents('/database/user.json', json_encode($data));
