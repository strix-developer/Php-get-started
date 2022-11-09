<?php

//constant
const rishi='123';
echo rishi;

define("hello", "world");
echo hello;

//operators

//Arithmetic operators
$x= 200;
$y= 100;
echo $x+$y;
echo "<br>";

$x= 300;
$y= 50;
echo $x-$y;
echo "<br>";

$x=30;
$y=5;
echo $x*$y;
echo "<br>";

//Assignment operators
$x=10;
echo $x;
echo "<br>";

$x=40;
$x+=30;
echo $x;
echo "<br>";

$x=30;
$x-=40;
echo $x;
echo "<br>";

$x=50;
$x/=20;
echo $x;
echo "<br>";

//Comparison operators
$x=50;
$y=40;
var_dump($x==$y);
echo "<br>";

$x=38;
$y=35;
var_dump($x!=$y);
echo "<br>";

$x=45;
$y=58;
var_dump($x!==$y);
echo "<br>";

$x=70;
$y=80;
var_dump($x<$y);
echo "<br>";

//Increment/Decrement operators
$x=13;
echo ++$x;
echo "<br>";

$x=10;
echo $x++;
echo "<br>";

$x=10;
echo --$x;
echo "<br>";

//Logical operators
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
echo "<br>";

$x=30;
$y=40;
if ($x==30 or $y==20) {
    echo "hello world!";
}
echo "<br>";

//String operators
$x="hello";
$y="world";
echo $x . $y;
echo "<br>";

$x=3;
$y=4;
echo $x .= $y;
echo "<br>";

//variables
$x="hello";
echo $x;
echo "<br>";

//variables scope
function myTest() {
    $a= 5; // local scope
    
    echo "<p>Variable a inside function is: $a</p>";
  } 
  myTest();

  // using a outside the function will generate an error
  echo "<p>Variable a outside function is: $a</p>";
echo "<br>";

$x=5; // global scope

function test() {
  
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
test();

echo "<p>Variable x outside function is: $x</p>";
?>