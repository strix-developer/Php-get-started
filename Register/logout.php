<?php
  //Initialize session data
  session_start();

  //Free all session variables
  session_unset();

  //Destroys all data registered to a session
  session_destroy();

  //Redirect to login page 
  header("location: login.php");