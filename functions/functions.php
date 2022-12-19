<?php
declare(strict_types=1);

//PhP Function
function gap(){
    echo "Good Morning🌞";
}
gap();

echo "<br>";

//pass two argument in PHP function
function sayhello($names,$age){
    echo "Hello $names Your Age Is 👉$age  <br>";
}
sayhello("Rohit",22);
sayhello("Mahesh",43);
sayhello("Puran",34);

echo "<br>";

//pass two argument in PHP function
function greetings(){
    echo "Merry Christmas And Happy New Year";
}
echo "<h4> Hey Martina🌹</h4> <br/>";
greetings();
  // next line
echo "<br/>";
echo "<h4> Hey Jessica🌹</h4> <br/>";
greetings();

echo "<br>";

//default argument value
function checkheight(int $minheight=1){
        echo "The Height Is $minheight <br>";
}
checkheight(40);
checkheight(55);
checkheight();
checkheight(32);

echo "<br>";

//returning value in function
function sum(int $x,int $y){
    $z=$x+$y;
    return $x+ $y;
}
echo "10+10=" . sum(10,10). "<br>";
echo "17+12=" . sum(17,12). "<br>";
echo "65+55=" . sum(65,55);

echo "<br>";

//with integer
function add(float $x,float $y):int{
    return(int)($x+$y);
}
echo add(43.5,78.8);

echo "<br>";

//only floating point number
function add1(float $x,float $y){
    return($x+$y);
}
echo add1(43.5,78.8);

echo "<br>";

//passing argument by reference
function add_38(&$value) {
    $value +=38;
  }
  
  $num =72;
  add_38($num);
  echo $num;

  echo "<br>";

  //
  function cube($n){  
    return $n*$n*$n;  
    }  
    echo "Cube of 7 is: ".cube(7); 

    echo "<br>";

    //
    function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type ☕<br>";
}
echo makecoffee();
echo makecoffee("coffee");
echo makecoffee("espresso");

echo "<br>";

// user defined function that display today's date
function whatIsToday(){
    echo "Today is " . date("l-d/F/Y") . " Have fun";
}
whatIsToday()
?>
