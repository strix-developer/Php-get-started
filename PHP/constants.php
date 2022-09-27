<?php
//array constants
define(
    "Cars",[
        "BMW",
        "Audi",
        "Swift",
]);
echo Cars[0];
echo "<br>";
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
  echo "<br>";
  //Globle constants
  define(
    "numbers","1");
 
    function mynumber(){
        echo numbers;
    }
    echo mynumber();




?>