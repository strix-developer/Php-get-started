<?php
require_once __DIR__ . "/../../Bootstrap/App.php";

function  action($register) //making function for the path or directory 
{
    $actions = __DIR__ . './action/' . $register . '.php';
    if (has_Action($actions)) {
        return realpath($actions);
    } else {
        return __DIR__ . "/action/fallbacks.php";
    }
}

function has_Action($actions)
{
    return file_exists($actions); //for checking wheather a file or directory exists
}


function file_header() //making function for Header
{
    return realpath(__DIR__ . "/layout/header.php");
};

function file_content() //making function for Content
{
    return realpath(__DIR__ . "/layout/content.php");
};

function file_footer() //making function for Footer
{
    return realpath(__DIR__ . "/layout/footer.php");
};