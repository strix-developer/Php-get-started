<?php
function action($register)
{
    $register = __DIR__ . './action/' . $register . '.php';
    if (has_Action($register)) {
        return realpath($register);
    } else {
        return __DIR__ . "/action/fallbacks.php";
    }
}
function has_Action($register)
{
    return file_exists($register);
}




function file_header()
{
    return  require_once __DIR__ . "/Layout/header.php";
}
function file_contant()
{
    return require_once __DIR__ . "/Layout/content.php";
}
function file_footer()
{
    return require_once __DIR__ . "/Layout/footer.php";
}
