<h1>Do While</h1>
<?php
$var = 1;
do {
    echo "The number is $var" . '<br>';
    $var++;
} while ($var <= 10);


echo "<br>";
//pattern 1
echo "pattern 1";
echo "<br>";
$a = 1;
do {
    $b = 1;
    do {
        echo "&nbsp *";
        $b++;
    } while ($b <= $a);
    $a++;
    echo " <br>";
} while ($a <= 15);
//pattern 2
echo "pattern 2";
echo '<br>';
$a = 1;
do {
    $b = $a;
    do {
        echo " &nbsp *";
        $b++;
    } while ($b <= 15);
    $a++;
    echo "</br>";
} while ($a <= 15);
echo "<br>";
//table 1
echo "table 1";
echo"<br>";
$x=2;
$i=1;
$r = 10;
do{
    echo  $x, " * ", $i, " = ", $x * $i;
    
    $i++;
    echo"<br>";
}while($i<=$r);
//table 1
echo "table 1";
echo"<br>";
$x=2;
$i=1;
$r = 10;
do{
    echo  $x, " * ", $i, " = ", $x * $i;
    
    $i++;
    echo"<br>";
}while($i<=$r);
//table 2
echo "table 2";
echo"<br>";
$x=3;
$i=1;
$r = 10;
do{
    echo  $x, " * ", $i, " = ", $x * $i;
    
    $i++;
    echo"<br>";
}while($i<=$r);
//table 3
echo "table 3";
echo"<br>";
$x=4;
$i=1;
$r = 10;
do{
    echo  $x, " * ", $i, " = ", $x * $i;
    
    $i++;
    echo"<br>";
}while($i<=$r);
//table 4
echo "table 4";
echo"<br>";
$x=5;
$i=1;
$r = 10;
do{
    echo  $x, " * ", $i, " = ", $x * $i;
    
    $i++;
    echo"<br>";
}while($i<=$r);
//table 5
echo "table 5";
echo"<br>";
$x=6;
$i=1;
$r = 10;
do{
    echo  $x, " * ", $i, " = ", $x * $i;
    
    $i++;
    echo"<br>";
}while($i<=$r);