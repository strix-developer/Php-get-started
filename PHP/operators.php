<?php

$age=25;
if($age>=18 or $age<=20){
echo "This is my age  ";
var_dump($age);
}
else{ echo "this is not my age";}
echo "<br>";
$x = 100;  

if (!($x <= 90)) {
    echo "ho gaya kya?";
}
echo "<br>";
$name = "Himanshu";
$surname = " Thakur";
echo $name . $surname;
echo "<br>";
$name1 = "Himanshu";
$surname1 = " Thakur";
$name1 .= $surname1;
 echo $name1;
 echo "<br>";
 echo "<h3>Postincrement</h3>";
 $a = 5;
 echo "Should be 5: " . $a++ . "<br />\n";
 echo "Should be 6: " . $a . "<br />\n";
 
 echo "<h3>Preincrement</h3>";
 $a = 5;
 echo "Should be 6: " . ++$a . "<br />\n";
 echo "Should be 6: " . $a . "<br />\n";
 
 echo "<h3>Postdecrement</h3>";
 $a = 5;
 echo "Should be 5: " . $a-- . "<br />\n";
 echo "Should be 4: " . $a . "<br />\n";
 
 echo "<h3>Predecrement</h3>";
 $a = 5;
 echo "Should be 4: " . --$a . "<br />\n";
 echo "Should be 4: " . $a . "<br />\n";
?>