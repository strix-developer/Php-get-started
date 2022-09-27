<?php
//Globle Scope
echo "<h1>Globle Scope</h1>";
$a = 1;
$b = 2;

function Sum()
{
}
global $a, $b;

$b = $a + $b;
Sum();
echo $b;
echo "<br>";
//Local Scope
echo "<h1>Local Scope</h1>";

function text()
{
    $c = 3;
    $d = 3;
    $d = $c + $d;
    echo $d;
}
text();
//Static Scope
echo "<h1>Static Scope</h1>";
function mytest(){
    static $x=1;
    echo $x;
    $x++;
}
mytest();
echo  '<br>';
mytest();
echo  '<br>';
mytest();
echo  '<br>';
