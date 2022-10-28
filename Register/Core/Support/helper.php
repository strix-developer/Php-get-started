<?php
function action($register)
{
    $actions = __DIR__ . './Action/' . $register . '.php';
    if (has_Action($actions)) {
        return realpath($actions);
    } else {
        return __DIR__ . "/action/fallbacks.php";
    }
}
function has_Action($actions)
{
    return file_exists($actions);
}




function file_header()
{
    return  require_once __DIR__ . "/Layout/header.php";
}
function file_contant()
{
    return require_once __DIR__ . "/Layout/contant.php";
}
function file_footer()
{
    return require_once __DIR__ . "/Layout/footer.php";
}
