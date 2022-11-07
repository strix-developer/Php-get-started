<?php
$one=42;
$two=13;
$sum=$one+$two;
echo $sum;
echo '<br>';





$a=12;
$b=56;
$sum=$a-$b;
echo $sum;

echo '<br>';




$ab=233;
$bc=777;
$sum=$ab*$bc;
echo $sum;
echo '<br>';




$cd=4;
$md=3;
$cum=$cd/$md;
echo $cum;
echo '<br>';



$one=4;
$two=3;
$sum=$cd%$md; 
echo $sum;
echo '<br>';

$one=12;
$two=2;
$sum=$cd**$md; 
echo $sum;1

?>

<?php

$a = 3;
$b = &$a; // $b is a reference to $a

print "$a\n"; // prints 3
print "$b\n"; // prints
$a = 4; // change $a

print "$a\n"; // prints 4
print "$b\n"; // prints 4 as well, since $b is a reference to $a, which has
              // been changed
              
?>