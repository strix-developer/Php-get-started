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

        if (isset($_POST['submit'])) {
            
           // For inserting the Image to the database
            $fileName = $_FILES["file"]["name"];
            $fileSize = $_FILES["file"]["size"];
            $tmpName = $_FILES["file"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)) {
                echo "<script> alert('Invalid Image Extension'); </script>";
            } elseif ($fileSize > 1000000) {
                echo "<script> alert('Image Size Is Too Large'); </script>";
            } else {
                $fileName = uniqid();
                $fileName .= '.' . $imageExtension;
                move_uploaded_file($tmpName, './Upload-Image' . $fileName);
                
                //insert data from wordpress
                $sql = "INSERT INTO `user_post`(`Title`, `Author`, `Categories`, `Tags`, `Date`, `File`) VALUES ('$title','$author','$categories','$tags','$date','$fileName')";

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
    }
}
mysqli_close($connect);
?>