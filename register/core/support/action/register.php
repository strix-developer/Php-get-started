 <?php

    if (isset($_POST['action'])) { //fetching user's data from signup form

        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $pass = $_POST['pass'];
        $conpass = $_POST['con-pass'];
        $role = $_POST['role'];

        //Condition for empty fields
        if (empty($name) || empty($lname) || empty($email) || empty($pass) || empty($conpass) || empty($role)) {
            echo "<h4 class='error'>Fill in the empty fields!</h4>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //Condition for valid email format
            echo "<h4 class='error'>You have used an invalid e-mail!</h4>";
        } elseif ($pass !== $conpass) { //Condition for Password matching
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

            if ($email == $getdata['E-mail']) { // for checking if email already exists in database or not
                echo "<h4 class='error'>Email is already in use!</h4>";
            } else {
                $formdata = json_encode($getdata, JSON_PRETTY_PRINT); //encoding the decode file using json_encode
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
         border-color: red;
     }

     .success {
         background-color: #198754;
         color: white;
         text-align: center;
         height: 50px;
         padding-top: 10px;
         border-color: red;
     }
 </style>

 </html>