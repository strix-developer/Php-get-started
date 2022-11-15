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
    
    echo "<p>Variable a inside function is: $a </p>";
  } 
  myTest();

  // using a outside the function will generate an error
  echo "<p>Variable a outside function is: $a </p>";
echo "<br>";

$x=5; // global scope

function test() {
  
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
test();

echo "<p>Variable x outside function is: $x</p>";
echo "<br>";
 
$a = 5;
echo "Should be 5: " . $a . "<br />\n";
echo "Should be 6: " . $a++ . "<br />\n";

echo "<br>";
//Array operator
//union
$x=array("a"=>"red","b"=>"orange","c"=>"green");
$y=array("a"=>"blue","b"=>"yellow","c"=>"black");
 print_r($x+$y);
 
 echo "<br>";
//equality
 $x=array("a"=>"red","b"=>"orange","c"=>"green");
$y=array("a"=>"blue","b"=>"yellow","c"=>"black");
 var_dump($x==$y);

 echo "<br>";
//identity
 $x=array("a"=>"red","b"=>"orange","c"=>"green");
$y=array("a"=>"blue","b"=>"yellow","c"=>"black");
 var_dump($x===$y);

 echo "<br>";
//inequality
 $x=array("a"=>"red","b"=>"orange","c"=>"green");
 $y=array("a"=>"blue","b"=>"yellow","c"=>"black");
  var_dump($x!=$y);

  echo "<br>";
  //inequality
  $x=array("a"=>"red","b"=>"orange","c"=>"green");
  $y=array("a"=>"blue","b"=>"yellow","c"=>"black");
   var_dump($x<>$y);

   echo "<br>";
//Non-identity
   $x=array("a"=>"red","b"=>"orange","c"=>"green");
   $y=array("a"=>"blue","b"=>"yellow","c"=>"black");
  var_dump($x!==$y);
  echo "<br>";
  
// test operator

  class Developer{

  }
  class Programmer{

  }

$jitesh= new Developer;
if($jitesh instanceof Developer){
   echo"jitesh is developer";
}
elseif($jitesh instanceof Programmer){
   echo"jitesh is programmer";
}
echo "<br>";
var_dump($jitesh instanceof Developer);
echo "<br>";
var_dump($jitesh instanceof Programmer);


?>