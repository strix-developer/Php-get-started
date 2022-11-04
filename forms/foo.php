<?php


    if($_POST['submit']){
    if($_POST['username']==true){
        echo $_POST["username"];
        echo $_POST['email'];
        

        echo 'sucessfully stored';
    }
    else{
    echo "error:::fill all the feilds";
}

    
} 