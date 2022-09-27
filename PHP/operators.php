<?php

$age = 25;
if ($age >= 18 or $age <= 20) {
    echo "This is my age  ";
    var_dump($age);
} else {
    echo "this is not my age";
}
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
echo "Should be 5: " . $a++ . "<br />";
echo "Should be 6: " . $a . "<br />";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br />";
echo "Should be 6: " . $a . "<br />";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "Should be 5: " . $a-- . "<br />";
echo "Should be 4: " . $a . "<br />";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "Should be 4: " . --$a . "<br />";
echo "Should be 4: " . $a . "<br />";

?>


<H1>string operators</H1>
<?php
$a = "hello";
$b = $a . "world";

echo $b;
echo '<br>';
$a = "test";
$a .= "test2";

echo $a;
echo '<br>';

$var = 12345;

echo "Hello $var world";
echo "<br>";

$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "c" => "strawberry", "d" => "cherry");

print_r($a + $b);
echo "<br>";

$x = array("a" => "red", "b" => "green");
$y = array("a" => "red", "b" => "green");

var_dump($x == $y);
echo "<br>";

$x = array("red", "green");
$y = array("red", "green");

var_dump($x == $y);

echo "<br>";

// identity
$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");

var_dump($a == $b);
var_dump($a === $b);

echo "<br>";

//non-identity
echo '<h1>non</h1>';
$a = array("apple", "banana");
$b = array("apple", "banana");

var_dump($a !== $b);

echo "<br>";

// inequality
// $x = array("a" => "red", "b" => "green");  
// $y = array("a" => "red", "b" => "green");  

// var_dump($x != $y);


// $x = 10;
// $y = 9;

// var_dump($x <> $y);
echo "<h1>Variable variables</h1>";
$var1 = "Hello";
$$var1 = "World";
echo $var1;
echo $$var1;
echo '<br>';
echo "{$$var1}$Hello";
echo '<br>';
echo '<h1>Type operator</h1>';
class first
{
}
class second extends first
{
}
$a = new second;
var_dump($a instanceof second);

echo '<br>';
echo '<h1>Ternary operator</h1>';
$t = date("H");

if ($t > "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo '<br>';
echo ('$t<=21') ? 'Have a good day' : 'Have a good night';

//Array operstors
echo '<br>';
echo '<h1>Array operator</h1>';
//union
echo '<h3>Union</h3>';
$x = array('a' => "Himanshu", "b" => "Thakur");
$y = array('c' => "Name", "d" => "Is zester");
print_r($x + $y);
echo '<br>';
//	Equality
echo '<h3>Equality</h3>';
$x = array('a' => "Himanshu", "b" => "Thakur");
$y = array('a' => "Himanshu", "b" => "Thakur");
var_dump($x == $y);
echo '<br>';
//Identity
echo '<h3>Identity</h3>';
$x = array('a' => "Himanshu", "b" => "Thakur");
$y = array('c' => "Himanshu", "d" => "Thakur");
var_dump($x === $y);
echo '<br>';
//	Inequality
echo '<h3>Inequality</h3>';
$x = array('a' => "Himanshu", "b" => "Thakur");
$y = array('a' => "Name is", "b" => "Zester");
var_dump($x != $y);
echo '<br>';
//Non-identity
echo '<h3>Non-identity</h3>';
$x = array('a' => "Himanshu", "b" => "Thakur");
$y = array('a' => "Name is", "b" => "Zester");
var_dump($x !== $y);
echo '<br>';
echo '<h1>String Operators</h1>';
//Concatenation
echo '<h3>Concatenation</h3>';
$a = 'Himanshu';
$b = ' Thakur';
echo $a . $b;
echo '<br>';
//Concatenation assignment
echo '<h3>Concatenation assignment</h3>';
$a ='Himanshu';
$a .= 'Thakur';
echo $a;
echo '<br>';
//Logical Operator
echo '<h1>Logical Operator</h1>';
//And
echo '<h3>And</h3>';
$age = 25;
if ($age >= 18 && $age >= 20) {
    echo "This is my age  ";
    var_dump($age);
} else {
    echo "this is not my age";
}
echo '<br>';
$age = 25;
if ($age <= 18 && $age <= 20) {
    echo "This is my age  ";
    var_dump($age);
} else {
    echo "this is not my age";
};
//or
echo '<h3>OR</h3>';
$age = 25;
if ($age >= 18 or $age <= 20) {
    echo "This is my age  ";
    var_dump($age);
} else {
    echo "this is not my age";
}
echo '<br>';
$age = 25;
if ($age <= 18 or $age <= 20) {
    echo "This is my age  ";
    var_dump($age);
} else {
    echo "this is not my age";
}
echo '<br>';
echo '<h3>XOR</h3>';
$age = 25;
if ($age >= 18 xor $age <= 20) {
    echo "This is my age  ";
    var_dump($age);
} else {
    echo "this is not my age";
}
echo '<br>';
$age = 25;
if ($age <= 18 xor $age <= 20) {
    echo "This is my age  ";
    var_dump($age);
} else {
    echo "this is not my age";
}
echo '<br>';
echo '<h3>Not</h3>';
$age = 25;
if ($age <= 18 == $age <= 20) {
    echo "This is my age  ";
    var_dump($age);
} else {
    echo "this is not my age";
}
echo '<br>';
$age = 25;
if ($age <= 18 !== $age <= 20) {
    echo "This is my age  ";
    var_dump($age);
} else {
    echo "this is not my age";
}
echo '<br>';
echo '<h1>Comparison Operators</h1>';
//Equal
echo '<h3>Equal</h3>';
$x = 100;  
$y = "100";
var_dump($x == $y);
echo '<br>';
$x = 100;  
$y = "50";
var_dump($x == $y);
echo '<br>';
//Identical
echo '<h3>Identical</h3>';
$x = 100;  
$y = "100";
var_dump($x === $y);
echo '<br>';
//





?>