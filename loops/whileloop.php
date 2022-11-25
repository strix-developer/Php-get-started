<?php
/// while loop///
/* The while loop executes a block of code as long 
as the specified condition is true. */
$i = 11;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

$i = 1;
do {
    echo $i;
} while ($i >= 5);



$x = 1;

do {
  echo "The number is: $x <br>"; 
  $x++;
} while ($x >= 5);

//star pattern using while loop
echo "<h1> 1. </h1>";

 $i=0;
 while($i<5){

    $j=0;
    while($j<=$i){
    echo "* &nbsp";
        $j++;
    }
    echo "<br>";
     $i++;
    
 }
 echo "<br>";

//
 echo "<h1> 2. </h1>";
$size = 5;
$i=1;
while($i<=$size){
   $j=1; 
   while($j<=$size-$i){
       echo "&nbsp;&nbsp;";
       $j++;
   }
   $k=1;
   while($k<=$i){
       echo "*&nbsp;&nbsp;";
       $k++;
   }
echo "<br>";
$i++;
}
echo "<br>";

//
echo "<h1> 3. </h1>";
 $i=0;
while ($i <= 5) {
	$j=$i;
	while ( $j<=5) {
		$j++;
		echo "* &nbsp";
	}
	$i++;
	echo " </br>";
}

echo "<br>";

//
echo "<h1> 4. </h1>";
$i=0;
while( $i<5 ){
	$j=0;
	while( $j < $i ){
		echo "&nbsp&nbsp&nbsp";
		$j++;
	}
	$j=0;
	while ( $j<5-$i) {
		echo "&nbsp*";
		$j++;
	}
	$i++;

	echo " <br> ";
}

 
// number pattern using while loop
echo "<h1> 1. </h1>";
$i=1;
 while($i<=5){

    $j=1;
    while($j<=$i){
    echo $j;
        $j++;
    }
    echo "<br>";
     $i++;
    
 }
 echo "<br>";

//
 echo "<h1> 2. </h1>";
$n = 1;
$i = 0;
while ( $i < 5 )
{
    $j = 0;
    while ( $j <= $i )
    {
        $j++;
        echo $n." ";
    }
    $n = $n + 1;
    echo "<br>";
    $i++;
}
echo "<br>";

//
echo "<h1> 3. </h1>";
$i=4;
while( $i>=0)
{
    $j=0;
 while( $j<=$i ){
 $j++;
  echo $j;
 }
 echo "<br>";
 $i--;
}
echo "<br>";


//
echo "<h1> 4. </h1>";
$i=5;
while($i>=1){
$j=$i;  
while($j>=1){ 
$j--; 
echo $i;  
 }  
echo "<br>";
$i--;
} 
echo "<br>";


//
echo "<h1> 5. </h1>";
$size = 5;
    $i = 0;
    while( $i < $size ) {
        $j = 1;
        while( $j < $size - $i ) {
            $j++;
            echo "&nbsp;&nbsp;";
        }
        $k = 0;
        while( $k <= $i ) {
            $k++;
            echo $k;
        }
        echo "<br>";
        $i++;
    }
 
 echo "<br>";


 //
 echo "<h1> 1. </h1>";
 $size = 5  ;
 $i = 0;
    while( $i < $size) {
        $j = 0;
        while( $j < $size - $i - 1 ) {
            $j++;
            echo "&nbsp;&nbsp;";
        }
        $k = 0;
        while( $k < 2 * $i + 1 ) {
            $k++;
            echo "*";
        }
        echo "<br>";
        $i++;
    }
    $size = 5;
    $i = 0;
    while( $i < $size ) {
        $j = 0;
        while( $j < $i ) {
            $j++;
            echo "&nbsp;&nbsp;";
        }
        $k = 0;
        while( $k < 2 * ($size - $i) - 1) {
            $k++;
            echo "*";
        }
        echo "<br>";
        $i++;
    }
    echo"<br>";


//
    echo "<h1> 2. </h1>";
    $row = 7; 
$a = 1;
while ($a <= $row) {
    $b = 1;
    while ($b <= $a) {
        echo "&nbsp&nbsp";
        $b++;
    }
    $c = $a;
    while ($c <= $row) {
        echo "&nbsp&nbsp";
        $c++;
    }
    $d = 1;
    while ($d <= $a) {
        echo "*";
        $d++;
    }
    $a++;
    echo "<br>";
}
$a = 1;
while ($a <= 7) {
    $b = 1;
    while ($b <= $a) {
        echo "&nbsp&nbsp";
        $b++;
    }
    $c = $a;
    while ($c <= 7) {
        echo "*";
        $c++;
    }
    $a++;
    echo "<br>";
}
echo "<br>";


//
echo "<h1> 3. </h1>";
$row = 7; 
$a = 1;
while ($a <= $row) {
    $b = 1;
    while ($b <= $a) {
        echo "*";
        $b++;
    }
    $c = $a;
    while ($c <= $row) {
        echo "&nbsp&nbsp";
        $c++;
    }
    $d = 1;
    while ($d <= $a) {
        echo "";
        $d++;
    }
    $e = 7;
    while ($e >= $a) {
        echo "&nbsp&nbsp";
        $e--;
    }
    $f = 1;
    while ($f <= $a) {
        echo "*";
        $f++;
    }
    $a++;
    echo "<br>";
}
echo "<br>";


        echo "<br>";


//
echo "<h1> 4. </h1>";
        $size = 6;
        $i = $size / 2;
    while ( $i < $size ) {
        $j = 1;
        while( $j < $size - $i ) {
            $j += 2;
            echo "&nbsp;&nbsp;";
        }
        $j = 1;
        while( $j < $i + 1 ) {
            $j++;
            echo "*";
        }
        $j = 1;
        while ( $j < $size - $i + 1 ) {
            $j++;
            echo "&nbsp;&nbsp;";
        }
        $j = 1;
        while ( $j < $i + 1 ) {
            $j++;
            echo "*";
        }
        echo "<br>";
        $i += 2;
    }
    $i = $size; 
    while ($i > 0 ) {
        $j = 0;
        while ( $j < $size - $i ) {
            $j++;
            echo "&nbsp;&nbsp;";
        }
        $j = 1;
        while ( $j < $i * 2 ) {
            $j++;
            echo "*";
        }
        echo "<br>";
        $i--;
    }
echo "<br>";


    // Do while loop
    /*The do...while loop will always execute the block of code once, it will then check the condition,
     and repeat the loop while the specified condition is true.*/


    $n=1;    
    do{    
    echo "$n<br/>";    
    $n++;    
    }while($n<=10); 
    echo "<br>";

    //
    $x = 1;  
    do {  
        echo "1 is not greater than 10.";  
        echo "</br>";  
        $x++;  
    } while ($x > 10);  
    echo $x;  



?>
