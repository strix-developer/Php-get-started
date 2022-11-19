 <?php

    if (isset($_POST['action'])) {

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if (empty($email) || empty($pass)) {
            echo "<h4 class='error'>Fill in the empty fields!</h4>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h4 class='error'>You used an invalid e-mail!</h4>";
        } else {
            $data = json_decode(file_get_contents(__DIR__ . "/../../../database/user.json"), true);

            $filter = array_filter($data, function ($data) {
                if ($data['E-mail'] == $_POST['email'] && ($data['Password'] == $_POST['pass'])) {
                    $_SESSION['submit'] = true;
                    $_SESSION['name'] = $data['First Name'];
                    $_SESSION['lname'] = $data['Last Name'];
                    $_SESSION['number'] = $data['Phone Number'];
                    $_SESSION['email'] = $data['E-mail'];
                    $_SESSION['pass'] = $data['Password'];
                    $_SESSION['role'] = $data['Role'];
                    $_SESSION['ID'] = $data['ID'];

                    return $data;
                }
            });

            if ($filter == true) {
                header("location: ./dashboard.php");
            } else {
                echo "<p class='error'>Invalid email or password</p>";
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
     }

     .success {
         background-color: #198754;
         color: white;
         width: 500px;
         text-align: center;
         height: 50px;
         padding-top: 10px;
     }
 </style>

 </html>