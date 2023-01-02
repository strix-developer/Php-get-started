<?php
//post method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_REQUEST['title'];
    $author = $_REQUEST['author'];
    $categories = $_REQUEST['categories'];
    $tags = $_REQUEST['tags'];
    $date = $_REQUEST['date'];
    //connect to database
    extract($_POST);
    include("db.php");
    $sql = mysqli_query($connect, "SELECT * FROM `user_post` WHERE title='$title'");
    if (mysqli_num_rows($sql) > 0) {
        echo "Title Already Exists";
        exit;
    } else {
        //image upload
        $title = $_POST['title'];
        $files = $_FILES['file'];

        print_r($title);
        echo "<br>";
        $fileName = $files['name'];
        $fileerror = $files['error'];
        $filetmp = $files['tmp_name'];

        $fileext = explode('.', $fileName);
        $filecheck = strtolower(end($fileext));

        $fileextstore = array('png', 'jpg', 'jpeg');

        if (in_array($filecheck, $fileextstore)) {
            $destfile = 'Upload-Image/' . $fileName;
            move_uploaded_file($filetmp, $destfile);
        }
        //insert data from user_post
        $sql = "INSERT INTO `user_post`(`Title`, `Author`, `Categories`, `Tags`, `Date`, `File`) VALUES ('$title','$author','$categories','$tags','$date','$destfile')";

        $result = mysqli_query($connect, $sql);
        //result
        if ($result) {
            echo '<strong>Success!</strong>Your entry has been submitted successfully!';

            header("Location: all_posts.php");
        } else {
            echo "The record was not submitted successfully because of this error --->" . mysqli_error($connect);
        }
    }
}
mysqli_close($connect);
