<?php
// Simple scalar value
const CONSTANT = ' Hello World '."<br>";


// Scalar expression
const ANOTHER_CONST = CONSTANT.' Goodbye World '."<br>";
echo ANOTHER_CONST;

const ANIMALS = array(' dog ', ' cat ', ' bird ');
echo ANIMALS[ 0 ]; 
echo ANIMALS[ 1 ];
echo ANIMALS[ 2 ];
echo "<br>";

?>


<?php





const foo = ' hello ';
const bar = ' foo ';
const bd = ' bar ';

echo foo;   // Prints out: Hello
echo bar;
echo bd ."<br>";

echo PHP_VERSION."<br>";
echo PHP_MAJOR_VERSION."<br>";
echo PHP_MINOR_VERSION. "<br>";
echo PHP_RELEASE_VERSION."<br>";
echo PHP_VERSION_ID."<br>";
echo PHP_EXTRA_VERSION."<br>";
echo PHP_DEBUG."<br>";

//magic constants
echo __LINE__."<br>";
echo __FILE__."<br>";
echo __DIR__."<br>";



?>