<?php 

//forloop
/*PHP for loop can be used to traverse set of code for the specified number of times.

It should be used if the number of iterations is known otherwise use while loop. This means for loop is used when you already know how many times you want to execute a block of code.

It allows users to put all the loop related statements in one place. See in the example given below:*/

for($n=1;$n<=10;$n++){    
echo "$n<br/>";    
}   



//star pattern using for loop

//left-aligned pyramid pattern using stars
echo"<h1> 1. </h1>";
 for($i=0;$i<5 ;$i++){ 
    for($j=0; $j<=$i; $j++){
    echo "* &nbsp";    
    }
    echo "<br>";
 }

 echo "<br>";

 //triangle pyramid pattern program using stars
 echo "<h1> 2. </h1>";
 for ($i=1; $i<=5; $i++) 	       
{ 	 
for ($k=5; $k>$i; $k--)	 
{	  
echo "&nbsp";	  
}	
for($j=1;$j<=$i;$j++)	  
{	  	
echo "*";	  
}	  	
echo "<br/>";	
} 
//
echo "<h1> 3. </h1>";
 
for ($i=0;$i <= 4;$i++) {
	for ($j=$i; $j<=4;$j++) {	
		echo "* &nbsp";
	}
	echo " </br>";
}

echo "<br>";

//
echo "<h1> 4. </h1>";

for($i=0; $i<5;$i++ ){
	for( $j=0;$j < $i;$j++ ){
		echo "&nbsp&nbsp&nbsp";	
	}
	for ($j=0; $j<5-$i;$j++) {
		echo "&nbsp*";	
	}
	echo " <br> ";
}

// number pattern using for loop
echo "<h1> 1. </h1>";

 for($i=1;$i<=5; $i++){
    for( $j=1;$j<=$i;$j++){
    echo $j." ";
    }
    echo "<br>"; 
 }

 echo "<h1> 2. </h1>";
$size = 5;
    for( $i = 0; $i < $size; $i++) {       
        for( $j = 1; $j < $size - $i; $j++ ) {           
            echo "&nbsp;&nbsp;";
        }
        for($k = 0; $k <= $i; $k++ ) {          
            echo $k;
        }
        echo "<br>";  
    }
 
//left-aligned pyramid pattern using numbers:
 echo "<h1> 3. </h1>";
 
 $n = 1; 
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n." ";
    }
    $n = $n + 1;
    echo "<br>";
}

echo "<h1> 4. </h1>";

for($i=5; $i>=0;$i--)
{   
for( $j=1; $j<=$i;$j++ ){
  echo $j;
 }
 echo "<br>";
}

echo "<h1> 5. </h1>";

for($i=5;$i>=1;$i--){ 
for($j=$i;$j>=1;$j--){ 
echo $i;  
 }  
echo "<br>";
} 
//
echo "<h1> 1. </h1>";
$size = 5;
   for( $i = 0;$i < $size;$i++) {
       for($j = 0; $j < $size - $i - 1;$j++) {   
           echo "&nbsp;&nbsp;";
       }
       for($k = 0; $k < 2 * $i + 1;$k++ ) {   
           echo "*";
       }
       echo "<br>";  
   }
   $size = 5;
   for( $i = 0;$i < $size;$i++ ) {
       for($j = 0; $j < $i; $j++ ) {  
           echo "&nbsp;&nbsp;";
       } 
       for($k = 0; $k < 2 * ($size - $i) - 1;$k++) {
           echo "*";
       }
       echo "<br>"; 
   }

   echo "<h1> 2. </h1>";
   $row = 7; 

for ($a = 1;$a <= $row;$a++) {
   for ($b = 1;$b <= $a;$b++) {
       echo "&nbsp&nbsp";
   }
   for ($c = $a;$c <= $row;$c++) {
       echo "&nbsp&nbsp";
   }
   for ($d = 1;$d <= $a;$d++) {
       echo "*";   
   }
   echo "<br>";
}
for ($a = 1;$a <= 7;$a++) {  
   for ($b = 1;$b <= $a;$b++) {
       echo "&nbsp&nbsp";
   }
   for ($c = $a;$c <= 7;$c++) {
       echo "*";   
   }
   echo "<br>";
}

echo "<h1> 3. </h1>";
$row = 7; 
for ($a = 1;$a <= $row;$a++) {
    for ($b = 1;$b <= $a;$b++) {
        echo "*";
        
    }
    for ($c = $a;$c <= $row;$c++) {
        echo "&nbsp&nbsp";
        
    }
    for ($d = 1;$d <= $a;$d++) {
        echo "";
        
    }
    for ($e = 7;$e >= $a;$e--) {
        echo "&nbsp&nbsp";
        
    }
    for ($f = 1;$f <= $a;$f++) {
        echo "*";
        
    }
    echo "<br>";
}
echo "<h1> 4. </h1>";
        $size = 6; 
    for ( $i = $size / 2;$i < $size;$i += 2 ) {
        for($j = 1; $j < $size - $i;$j += 2 ) {
            echo "&nbsp;&nbsp;";
        }
        for( $j = 1;$j < $i + 1;$j++ ) {   
            echo "*";
        }
        for ( $j = 1;$j < $size - $i + 1;$j++ ) {   
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j < $i + 1;$j++) {   
            echo "*";
        }
        echo "<br>";
    }
    for ($i = $size;$i > 0;$i-- ) {   
        for ($j = 0; $j < $size - $i;$j++) {
            echo "&nbsp;&nbsp;";
        }
        for ( $j = 1;$j < $i * 2;$j++) {   
            echo "*";
        }
        echo "<br>";
    }

    //foreach loop
    /* The foreach loop is used to traverse the array elements. It works only on array and object
      It provides an easiest way to iterate the elements of an array
      In foreach loop, we don't need to increment the value. */

      //associative array elements using foreach loop
      $person = array (  
        "Name" => "Rahul",  
        "Email" => "Rahuljtp@gmail.com",  
        "Age" => 21,  
        "Gender" => "Male"  
    );     
    foreach ($person as $key => $element) {  
        echo $key . " : " . $element;  
        echo "</br>";   
    }  
echo "<br>";
// indexed array elements using foreach loop
    $arr = array(2,4,6,8,10);
foreach ($arr as $i){
   echo $i . "*2=" . $i*2 . "";
   echo "<br>";
}

?>  