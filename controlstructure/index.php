<?php
$a = 1;
while ($a <= 15) {
	$b = 1;
	while ($b <= $a) {
		echo "&nbsp ";
		$b++;
	}
	$b = 1;
	while ($b < 15 - $a) {
		echo "*";
		$b++;
	}
	$a++;
$a++;
echo "<br>";
}
echo "<br>";
for ($a=1;$a<=15;$a++){
    for($b=1;$b<=$a;$b++){
        echo "&nbsp *&nbsp";
    }
    echo "<br>";
}










?>