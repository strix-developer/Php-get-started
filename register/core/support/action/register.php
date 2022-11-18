 <?php

    if (isset($_POST['action'])) { //fetching user's data from signup form

        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $pass = $_POST['pass'];
        $conpass = $_POST['con-pass'];
        $role = $_POST['role'];

        if (empty($name) || empty($lname) || empty($email) || empty($pass) || empty($conpass) || empty($role)) {
            echo "<h4 class='error'>Fill in the empty fields!</h4>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h4 class='error'>You used an invalid e-mail!</h4>";
        } elseif ($pass !== $conpass) {
            echo "<h4 class='error'>Password do not match!</h4>";
        } else {
            $array = array( // creating an array for the data
                'First Name' => $name,
                'Last Name' => $lname,
                'E-mail' => $email,
                'Phone Number' => $number,
                'Password' => $pass,
                'Role' => $role,
            );
            //converting file into string and then decoding using json_decode
            $getdata = json_decode(file_get_contents(__DIR__ . "/../../../database/user.json"), true);
            // storing data using ID
            if (count($getdata) == 0) {
                $array['ID'] = 1;
            };
            $id = [];
            foreach ($getdata as $dataid) {
                array_push($id, $dataid['ID']);
                $var = count($id) + 1;
                $array['ID'] = $var;
            };
            $getdata[] = $array;
            if ($email == $dataid['E-mail']) {
                echo "<h4 class='error'>Email is already in use!</h4>";
            } else { //encoding the decode file using json_encode
                $formdata = json_encode($getdata, JSON_PRETTY_PRINT);
                if (file_put_contents(__DIR__ . "/../../../database/user.json", $formdata)) { //write data to json file
                    echo "<p class='success'>user successfully registered</p>";
                }
            }
        }
    }
    ?>

 <!DOCTYPE html>
 <html lang="en">
 <style>
     .error {
         background-color: #212529;
         color: whitesmoke;
         text-align: center;
         height: 50px;
         padding-top: 10px;
         border-radius: 15px;
         border-color: red;
     }

     .success {
         background-color: #198754;
         color: white;
         text-align: center;
         height: 50px;
         padding-top: 10px;
         border-radius: 15px;
         border-color: red;
     }
 </style>

 </html>