<?php
//constant value//
const name="rishi";
echo name."<br>";
//2nd way to define constant value//
define ('abc',123);
echo abc."<br>";


//constant value//
$var =1;
echo $var."<br>";

$var =2;
echo $var."<br>";

?>
<?php
//pre defined//
echo PHP_VERSION ."<br>";
echo PHP_MAJOR_VERSION."<br>";
echo PHP_MINOR_VERSION."<br>" ;
echo PHP_RELEASE_VERSION ."<br>" ;
echo PHP_VERSION_ID."<br>";
echo PHP_EXTRA_VERSION."<br>";
echo PHP_ZTS."<br>";
echo PHP_DEBUG ."<br>";
echo PHP_MAXPATHLEN ."<br>";
echo PHP_OS ."<br>";
echo PHP_OS_FAMILY."<br>" ;
echo PHP_SAPI ."<br>";
echo PHP_EOL ."<br>";
echo PHP_INT_MAX."<br>" ;
echo PHP_INT_MIN ."<br>";
echo PHP_INT_SIZE ."<br>";
echo PHP_FLOAT_DIG ."<br>";
echo PHP_FLOAT_EPSILON ."<br>";
echo PHP_FLOAT_MIN ."<br>";
echo PHP_FLOAT_MAX ."<br>";
?>
<?php
//magic constant//
echo __LINE__."<br>";
echo __FILE__."<br>";
echo __DIR__."<br>";
?>
<?php
//arthmatic operators
$x = 10;  
$y = 6;

echo $x + $y."<br>";
echo $x - $y."<br>";
echo $x * $y."<br>";
echo $x / $y."<br>";
echo $x % $y."<br>";
echo $x ** $y."<br>";
?>  
<?php

$a = ($b = 4) + 5; 
echo $a;
