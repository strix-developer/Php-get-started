<?php
//First
$a=0;
while($a<=10){
  $b=0;
  while($b<=$a){
    echo "	&nbsp * &nbsp";
    $b++;
  }
  $a++;
  echo "<br>";
}
echo "<br>";
//Second
$r=10;
$c=0;
$i=0;
while ($i<10) {
	$j = $r;
	while($j > 0){
		echo "&nbsp ";
		$j--;
	}
	$k=0;
	while($k<=$c){
		echo "*";
		$k++;
	}
	echo "<br>";
	$r--;
	$c+=2;
	$i++;
}
echo "<br>";
//Third
$a=10;
while($a>=0){
  $b=0;
  while($b<=$a){
    echo "	&nbsp * &nbsp";
    $b++;
  }
  $a--;
  echo "<br>";
}
//Fourth
$a=0;
while( $a<=15 ){
	$b=0;
	while( $b <=$a ){
		echo "&nbsp ";
		$b++;
	}
	$b=0;
	while ( $b<15-$a) {
		echo "*";
		$b++;
	}
	$a++;
	echo " <br> ";
}
$j=1;
while($j<=11){
	echo "x";
	$j++;
}
echo"<br>";
$s=1;
$z=5;
$i=1;
while($i<=5){
	$j=$z;
	while($j>0){
		echo "x";
		$j--;
	}
	$k=1;
	while($k<=$s){
		echo "&nbsp ";
		$k++;
	}
	$s+=2;
	$l=$z;
	while($l>0){
		echo "x";
		$l--;
	}
	$z--;
	$i++;
	echo "<br>";
}
$m=7;
$i=1;
while($i<=4){
	$j=0;
	while($j<=$i){
		echo "x"; 
		$j++;
	}
	$k=1;
	while($k<=$m){
		echo "&nbsp ";
		$k++;
	}
	$j=0;
	while($j<=$i){
		echo "x";
		$j++;
	}
	$m-=2;
	$i++;
	echo "<br>";
}

echo "</br>";


?>