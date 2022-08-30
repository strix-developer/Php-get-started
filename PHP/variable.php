<?php
function myTest()
{
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
$x = 5;
$y = 10;

echo "<br>";
function myClass()
{
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myClass();
echo $y;


echo "<br>";
$x = 5;
$y = 10;

function myRoom()
{
    global $x, $y;
    $z = $x + $y;
}

myRoom();
echo $y;
