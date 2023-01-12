<?php
if (isset($_POST['action'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['pass'];
    $conpassword = $_POST['con-pass'];
    $role = $_POST['role'];
    $file = $_FILES['picture'];
    if (empty($name) || empty($email) || empty($number) || empty($password) || empty($conpassword) || empty($role) || empty($file)) {
        echo "Fill The Empty Filds";
    } elseif ($password !== $conpassword) {
        echo "Password Did Not Match";
    } else {
        $array = array(
            'Name' => $name,
            'Email' => $email,
            'Number' => $number,
            'Password' => $password,
            'Role' => $role,
            'picture' => $file
        );
        if (isset($_FILES['picture'])) {
            //For inserting the Image to the database
            $filename    = $_FILES["picture"]["tmp_name"];
            $destination = "upload/" . $_FILES["picture"]["name"]; 
            move_uploaded_file($filename, $destination); //save uploaded picture in your directory
        
            $_SESSION['picture'] = $destination;

        }
        //Read json file and decode json to associative array
        $data = json_decode(file_get_contents(__DIR__ . "/../../../database/user.json"), true);

        // storing data using ID
        if (count($data) == 0) {
            $array['ID'] = 1;
        };
        $id = [];

        //Condition for storing multiple user's ID 
        foreach ($data as $dataid) {
            array_push($id, $dataid['ID']);
            $variable = count($id) + 1;
            $array['ID'] = $variable;
        };
        $data[] = $array;

        // for checking if email is already exists or not
        if ($_POST['email'] == $dataid['E-mail']) {
            echo "<h4 class='error'>Email is already in use!</h4>";
        } else {
            //encoding array to json
            $encode = json_encode($data, JSON_PRETTY_PRINT);

            //saving data to file
            if (file_put_contents(__DIR__ . "/../../../database/user.json", $encode)) {
                echo "<p class='success'>user successfully registered</p>";
            }
            header("location: ./login.php");
        }
    }
}
