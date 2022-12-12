<?php
          if(isset($_POST['create'])){
          $firstname           = $_POST['firstname'];  
          $lastname            = $_POST['lastname']; 
          $email               = $_POST['email']; 
          $password            = $_POST['password']; 
          $confirm_password    = $_POST['confirm_password']; 
          
          if(empty($firstname)||empty($lastname)||empty($email)||empty($password)||empty($confirm_password)){
            echo"Fill The Epmty Fields";
          }
          elseif($password !== $confirm_password){
            echo "password did not match";
          }
          else {
        echo "sign up sucessfully";
          }
          }
          ?>