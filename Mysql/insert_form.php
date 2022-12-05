 <?php
    //Fetching form data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_REQUEST['first_name'];
        $lname = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $pswd = $_REQUEST['password'];
        $pnumber = $_REQUEST['phone_number'];
        $role = $_REQUEST['role'];
        $file = $_REQUEST['file'];

        //Connecting to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "practice";

        //Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Die if connection was not successful
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        //sql query to be executed
        $sql = "INSERT INTO `users` (`First Name`, `Last Name`, `Email`, `Password`, `Phone Number`, `Role`, `File`)
        VALUES ('$fname', '$lname', '$email', '$pswd', '$pnumber','$role','$file')";

        $result = mysqli_query($conn, $sql);

        //Check for the database creation successful
        if ($result) {
            echo '<strong>Success!</strong>Your entry has been submitted successfully!';
        } else {
            echo "The record was not submitted successfully because of this error --->" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
