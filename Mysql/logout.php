<?php
session_start();
unset($_SESSION["ID"]);
header("Location:create_login.php");
