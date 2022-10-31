<?php

function action($register)
{
    $actions = __DIR__ . './action/' . $register . '.php';
    if (has_action($actions)) {
        return realpath($actions);
    } else {
        return __DIR__ . "/action/fallback.php";
    }
}
function has_action($actions)
{
    return file_exists($actions);
}



function file_header()
{
    return  require_once __DIR__ . "/layout/header.php";
}


function file_content()
{
    return require_once __DIR__ . "/layout/content.php";
}


function file_footer()
{
    return  require_once __DIR__ . "/layout/footer.php";
}
