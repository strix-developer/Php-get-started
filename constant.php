<?php
// Simple scalar value
define("CONSTANT", "Hello world!");

echo CONSTANT;
echo '<br>';
// Scalar expression
define("constant",'Goodbye World');
echo constant;
echo '<br>';
const ANIMALS = array(' dog ', ' cat ', ' bird ');
echo ANIMALS[ 0 ]; 
echo ANIMALS[ 1 ];
echo ANIMALS[ 2 ];
echo '<br>';
// predefined constants
echo PHP_VERSION; echo '<br>';
echo PHP_MAJOR_VERSION; echo '<br>';
echo PHP_MINOR_VERSION; echo '<br>';
echo PHP_RELEASE_VERSION; echo '<br>';
echo PHP_VERSION_ID; echo '<br>';
echo PHP_EXTRA_VERSION; echo '<br>';
echo PHP_ZTS; echo '<br>';
echo PHP_DEBUG; echo '<br>';
echo PHP_MAXPATHLEN; echo '<br>';

// magic constants
echo "Example for __LINE__";  echo '<br>';  
// print Your current line number i.e;4     
echo "You are at line number " . __LINE__ ; 
echo '<br>';

echo "Example for __FILE__"; echo '<br>';   
//print full path of file with .php extension    
echo __FILE__ ;
echo '<br>'; 

echo "Example for __DIR__"; echo '<br>';    
//print full path of directory where script will be placed    
echo __DIR__;
?>