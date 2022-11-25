 <?php
    if (isset($_POST['action'])) {
        //fetching user's data from signup form
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
        }  //Condition for valid email format
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h4 class='error'>You have used an invalid e-mail!</h4>";
        } //Condition for Password matching
        elseif ($pass !== $conpass) {
            echo "<h4 class='error'>Password do not match!</h4>";
        } else { // creating an array for the data
            $array = array(
                'First Name' => $name,
                'Last Name' => $lname,
                'E-mail' => $email,
                'Phone Number' => $number,
                'Password' => $pass,
                'Role' => $role,
            );
            //converting file into string and then decoding using json_decode
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
                //encoding the decode file using json_encode
                $encode = json_encode($data, JSON_PRETTY_PRINT);

                //write data to json file
                if (file_put_contents(__DIR__ . "/../../../database/user.json", $encode)) {
                    echo "<p class='success'>user successfully registered</p>";
                }
                header("location: ./login.php");
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