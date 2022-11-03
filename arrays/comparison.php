<?php
$x = 100;  
$y = "100";

var_dump($x === $y); 
  
echo '<br>';

$x = 100;  
$y = "100";

var_dump($x == $y); 

$x = 100;  
$y = 10;

var_dump($x != $y); 

$x = 100;
$y = 50;

var_dump ($x > $y);

echo"<br>";

echo"<br>";

for($x=10;$x>=1;){
    $x--;
    echo $x,"<br>";
}






echo"<br>";
$x=10;
$y=10;
if($x==10 Xor $y==1){
    echo"both are equal";
}else{
    echo"not equal";
}


echo"<br>";


for($x=10;$x>=1;){
    $x--;
    echo $x,"<br>";
}
echo"<br>";
$x=10;

if($x!=1){
    echo"true";
}else{
    echo"false";
}
$x=19;
$y=17;
if($x >= 18 || $y >= 18){
    echo"both are eligle for voting";
}else{
    echo"not eligible";
}
//error control
echo"<br>";

$x= @$n ."gjgju";

echo $x;
echo"<br>";

//string control
$a = "Hello ";
$b = "World!";
echo $a.$b;
?>  