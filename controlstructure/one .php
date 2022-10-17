<?php
$row = 5;
$a = 1;
$g=4;
while ($a <= $row) {
	$b = $a;
	while ($b <= $row) {
		echo "&nbsp&nbsp";
		$b++;
	}
	$c = 1;
	while ($c <= $a - 1) {
		echo $c ."&nbsp";
		$c++;
	}
	$d = $a;
	while ($d >= 1) {
		echo $d ."&nbsp";
		$d--;
	}
	$a++;

	echo "<br>";
}
$a=1;
while($a<=$g){
    $b=1;
    while($b<=$a){
        $b++;
        echo "&nbsp;&nbsp;";
    }
    $c=0;
    while($c<$g){
        $c++;
        echo $c . "&nbsp";
    }
    $d=$row-1;
    while($d>=1){
        $d--;
        echo $d. "&nbsp";
    }
    echo "<br>";
    $g--;
}
