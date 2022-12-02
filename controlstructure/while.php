<?php
echo "First";
echo "<br>";
$a = 0;
while ($a <= 10) {
	$b = 0;
	while ($b <= $a) {
		echo "	&nbsp * &nbsp";
		$b++;
	}
	$a++;
	echo "<br>";
}
echo "<br>";
//Second
echo "Second";
echo "<br>";
$r = 10;
$c = 0;
$i = 0;
while ($i < 10) {
	$j = $r;
	while ($j > 0) {
		echo "&nbsp ";
		$j--;
	}
	$k = 0;
	while ($k <= $c) {
		echo "*";
		$k++;
	}
	echo "<br>";
	$r--;
	$c += 2;
	$i++;
}
echo "<br>";
//Third
echo "Third";
echo "<br>";
$a = 10;
while ($a >= 0) {
	$b = 0;
	while ($b <= $a) {
		echo "	&nbsp * &nbsp";
		$b++;
	}
	$a--;
	echo "<br>";
}
//Fourth
echo "Fourth";
echo "<br>";
$a = 0;
while ($a <= 15) {
	$b = 0;
	while ($b <= $a) {
		echo "&nbsp ";
		$b++;
	}
	$b = 0;
	while ($b < 15 - $a) {
		echo "*";
		$b++;
	}
	$a++;
	echo " <br> ";
}

//Practice 1
echo "practice 1";
echo "<br>";
$m = 15;
$i = 0;
while ($i <= 8) {
	$j = 0;
	while ($j <= $i) {
		echo "*";
		$j++;
	}
	$k = 0;
	while ($k <= $m) {
		echo "&nbsp ";
		$k++;
	}
	$j = 0;
	while ($j <= $i) {
		echo "*";
		$j++;
	}
	$m -= 2;
	$i++;
	echo "<br>";
}
echo "<br>";
//Practice 2
echo "Practice 2";
echo "<br>";
$r = 5;
$c = 0;
$i = 0;
while ($i < 5) {
	$j = $r;
	while ($j > 0) {
		echo "&nbsp ";
		$j--;
	}
	$k = 0;
	while ($k <= $c) {
		echo "*";
		$k++;
	}
	echo "<br>";
	$r--;
	$c += 2;
	$i++;
}
$c = 7;
$i = 0;
while ($i < 5) {
	echo "&nbsp ";
	$k = 0;
	while ($k <= $i) {
		echo "&nbsp ";
		$k++;
	}
	$j = $c;
	while ($j > 0) {
		echo "*";
		$j--;
	}
	echo "<br>";
	$c -= 2;
	$i++;
}
echo "<br>";
//Practice 3
echo "practice 3";
$a = 0;
while ($a <= 5) {
	$b = 1;
	while ($b <= $a) {
		echo "	&nbsp &nbsp $b ";
		$b += 1;
	}
	$a += 1;
	echo "<br>";
}
echo "<br>";
//practice 4
echo "practice 4";
echo "<br>";
$row = 7;
$a = 1;
while ($a <= $row) {
	$b = 1;
	while ($b <= $a) {
		echo $a;
		$b++;
	}
	$a++;
	echo "<br>";
}
echo " <br> ";
//Practice 5
echo "practice 5";
echo "<br>";
$row = 7;
$a = 1;
while ($a <= $row) {
	$b = 1;
	while ($b <= $a) {
		echo $b;
		$b++;
	}
	$a++;
	echo "<br>";
}
echo "<br>";
//Practice 6
echo "practice 6";
echo " <br> ";
$a = 5;
while ($a >= 1) {
	$b = 1;
	while ($b <= $a) {
		echo $b;
		$b++;
	}
	$a--;
	echo "<br>";
}
echo "<br>";
//Practice 7
echo "practice 7";
echo "<br>";
$a = 5;
while ($a >= 1) {
	$b = 1;
	while ($b <= $a) {
		echo $a;
		$b++;
	}
	$a--;
	echo "<br>";
}
echo "<br>";
//Practice 8
echo "practice 8";
echo " <br>";

$row = 5;
$a = 1;
while ($a <= $row) {
	$b = $a;
	while ($b <= $row) {
		echo "&nbsp&nbsp";
		$b++;
	}
	$c = 1;
	while ($c <= $a - 1) {
		echo $c;
		$c++;
	}
	$d = $a;
	while ($d >= 1) {
		echo $d;
		$d--;
	}
	$a++;

	echo "<br>";
}
echo "<br>";
//practice 9
echo "practice 9";
echo " <br>";
$row = 5;
$a = 1;
while ($a <= $row) {
	$b = $a;
	while ($b <= $row) {
		echo "&nbsp&nbsp";
		$b++;
	}
	$c = 1;
	while ($c <= $a - 1) {
		echo $c;
		$c++;
	}
	$d = $a;
	while ($d >= 1) {
		echo $d;
		$d--;
	}
	$a++;

	echo "<br>";
}
$a = 1;
while ($i < 5) {
	$j = 1;
	while ($j < $i) {
		echo "&nbsp ";
		$j++;
	}
	$e = 1;
	while ($e < 4 + 1) {
		echo $e;
		$e++;
	}
	$f = 3;
	while ($f > 0) {
		echo $f;
		$f--;
	}
	$i++;
	echo " <br> ";
}
//table
//table 2
echo "table 2";
echo "<br>";
$x = 2;
$r = 10;
$i = 1;
while ($i <= $r) {
	echo  $x, " * ", $i, " = ", $x * $i;
	$i++;
	echo "<br>";
}
echo "<br>";
//table 3
echo "table 3";
echo "<br>";
$x = 3;
$r = 10;
$i = 1;
while ($i <= $r) {
	echo  $x, " * ", $i, " = ", $x * $i;
	$i++;
	echo "<br>";
}
echo "<br>";
//table 4
echo "table 4";
echo "<br>";
$x = 4;
$r = 10;
$i = 1;
while ($i <= $r) {
	echo  $x, " * ", $i, " = ", $x * $i;
	$i++;
	echo "<br>";
}
echo "<br>"
	//table 5
;
echo "table 5";
echo "<br>";
$x = 5;
$r = 10;
$i = 1;
while ($i <= $r) {
	echo  $x, " * ", $i, " = ", $x * $i;
	$i++;
	echo "<br>";
}
echo "<br>";
//table 6
echo "table 6";
echo "<br>";
$x = 6;
$r = 10;
$i = 1;
while ($i <= $r) {
	echo  $x, " * ", $i, " = ", $x * $i;
	$i++;
	echo "<br>";
}





echo "number";
echo "<br>";
$row = 5;
$a = 1;
while ($a <= $row) {
	$b = $a;
	while ($b <= $row) {
		echo "&nbsp&nbsp";
		$b++;
	}
	$c = 1;
	while ($c <= $a - 1) {
		echo $c;
		$c++;
	}
	$d = $a;
	while ($d >= 1) {
		echo $d;
		$d--;
	}
	$a++;

	echo "<br>";
}