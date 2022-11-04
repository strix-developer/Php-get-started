<?php

function  action($register)
{
    $actions = __DIR__ . '/../support/action' . $register . '.php';
    if (action($actions)) {
        return realpath($actions);
    } else {
        return __DIR__ . "/action/fallback.php";
    };

    function has_action($actions)
    {
        return file_exists($actions);
    };
};

function file_header()
{
    return realpath(__DIR__ . "/layout/header.php");
};

function file_content()
{
    return realpath(__DIR__ . "/layout/content.php");
};

function file_footer()
{
  return realpath(__DIR__ . "/layout/footer.php");
};