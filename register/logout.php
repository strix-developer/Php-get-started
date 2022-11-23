 <?php
    session_start();

    session_unset();

    session_destroy();

    header("locationFGHV,: login.php");