<?php

$school= 'heyy';
echo $school;

?>

<?php
function myTest() {
  $x = 5; // local scope------------------------------
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

?>