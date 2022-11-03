<?php
function action($register)
{
$action = __DIR__ . './action/' . $register . '.php';
if (has_Action($action)) {
return realpath($action);
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
    return  include_once __DIR__ . "/Layout/header.php";
}
function file_content()
{
    return include_once __DIR__ . "/Layout/content.php";
}
function file_footer()
{
    return include_once __DIR__ . "/Layout/footer.php";
}
