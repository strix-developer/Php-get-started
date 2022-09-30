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




?>