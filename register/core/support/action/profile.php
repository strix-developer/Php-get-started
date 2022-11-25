 <?php
    if (isset($_POST['action'])) {
        //fetching user's profile data
        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $pass = $_SESSION['pass'];
        $age = $_POST['age'];
        $dob = $_POST['dob'];
        $aadhar = $_POST['aadhar'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $country = $_POST['country'];
        $role = $_SESSION['role'];
        $id = $_SESSION['ID'];

        //creating an array for the data
        $array = array(
            'First Name' => $name,
            'Last Name' => $lname,
            'E-mail' => $email,
            'Password' => $pass,
            'Phone Number' => $number,
            'Age' => $age,
            'Date Of Birth' => $dob,
            'Aadhar Number' => $aadhar,
            'Address' => $address,
            'City' => $city,
            'State' => $state,
            'Zip' => $zip,
            'Country' => $country,
            'Role' => $role,
            'ID' => $id,
        );

        //converting file into string and then decoding by json_decode
        $data = json_decode(file_get_contents(__DIR__ . '/../../../database/profile.json'), true);
        $data[] = $array;

        //encoding the decode data
        $formdata = json_encode($data, JSON_PRETTY_PRINT);

        //storing data to json file
        if (file_put_contents(__DIR__ . "/../../../database/profile.json", $formdata)) {
            echo "<p class='success'>Profile Successfully Updated!</p>";
        }
        header("location: ./dashboard.php");
    }
    ?>

 <!DOCTYPE html>
 <html lang="en">
 <style>
     .error {
         background-color: #4a4a4a;
         color: whitesmoke;
         text-align: center;
         height: 50px;
         padding-top: 10px;
         border-radius: 15px;
         border-color: red;
     }

     .success {
         background-color: green;
         color: white;
         text-align: center;
         height: 50px;
         padding-top: 10px;
         border-radius: 15px;
         border-color: red;
     }
 </style>

 </html>