<?php
for ($i = 1; $i <= 15; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "&nbsp *";
    }
    echo "</br>";
}
echo "<br>";
//pattern 2
echo "pattern 2";
for ($i = 0; $i <= 5; $i++) {
    for ($k = 5; $k >= $i; $k--) {
        echo "  ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}
for ($i = 4; $i >= 1; $i--) {
    for ($k = 5; $k >= $i; $k--) {
        echo "  ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}

echo "pattern 3";
echo "<br>";
for ($j = 1; $j <= 11; $j++) {
    echo "*";
}
$s = 1;
$z = 5;
echo "<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = $z; $j > 0; $j--) {
        echo "*";
    }
    for ($k = 1; $k <= $s; $k++) {
        echo "&nbsp ";
    }
    $s += 2;
    for ($l = $z; $l > 0; $l--) {
        echo "*";
    }
    $z--;
    echo "<br>";
}
$m = 7;
for ($i = 1; $i <= 4; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    for ($k = 1; $k <= $m; $k++) {
        echo "&nbsp ";
    }
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    $m -= 2;
    echo "<br>";
}
for ($j = 1; $j <= 11; $j++) {
    echo "*";
}
echo "<br>";
//table-1
echo "table-1";
$table = 2;
$length = 10;
$i = 1;
echo "<br>";
echo "Multiplication table: $table <br>";
for ($i = 1; $i <= $length; $i++)
    echo "$i * $table = " . $i * $table . "<br>";
echo "<br>";
//table-2
echo "table-2";
$table = 3;
$length = 10;
$i = 1;
echo "<br>";
echo "Multiplication table: $table <br>";
for ($i = 1; $i <= $length; $i++)
    echo "$i * $table = " . $i * $table . "<br>";
echo "<br>";
//table-3
echo "table-3";
$table = 4;
$length = 10;
$i = 1;
echo "<br>";
echo "Multiplication table: $table <br>";
for ($i = 1; $i <= $length; $i++)
    echo "$i * $table = " . $i * $table . "<br>";
echo "<br>";
//table-4
echo "table-4";
$table = 5;
$length = 10;
$i = 1;
echo "<br>";
echo "Multiplication table: $table <br>";
for ($i = 1; $i <= $length; $i++)
    echo "$i * $table = " . $i * $table . "<br>";
echo "<br>";
//table-5
echo "table-5";
$table = 6;
$length = 10;
$i = 1;
echo "<br>";
echo "Multiplication table: $table <br>";
for ($i = 1; $i <= $length; $i++)
    echo "$i * $table = " . $i * $table . "<br>";


//number pattern
echo "Pattern 1";
echo "<br>";
$e = 1;
$f = 5;
for ($a = 1; $a <= $f; $a++) {
    for ($b = $a; $b <= $f - 1; $b++) {
        echo "&nbsp;&nbsp;&nbsp";
    }
    for ($c = 1; $c <= $e; $c++) {
        echo $c . "&nbsp";
    }
    for ($d = $e; $d > 1; $d--) {
        echo $d - 1 . "&nbsp";
    }
    echo "<br>";
    $e++;
}
$g = 5;
for ($a = 1; $a <= $f; $a++) {
    for ($b = 1; $b <= $a; $b++) {
        echo "&nbsp;&nbsp;&nbsp";
    }
    for ($c = 1; $c < $g; $c++) {
        echo $c . "&nbsp";
    }
    for ($d = $g - 2; $d >= 1; $d--) {
        echo $d . "&nbsp";
    }
    echo "<br>";
    $g--;
}
echo "<br>";


//Break
echo "<h3>Break</h3>";
for ($x = 0; $x < 10; $x++) {
    if ($x == 10) {
      break;
    }
    echo $x . "<br>";
  }

  //Continue
  echo "<h3>Continue</h3>";
  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo $x . "<br>";
  }
  //Pattern
  echo "<h3>Pattern</h3>";
  for($i=1; $i<=5; $i++)
  {
   for($j=1; $j<=5; $j++)
   {
    if($j<=$i)
     echo $j;
    else
     echo "&nbsp;&nbsp;&nbsp; ";
   }
   for($k=5; $k>=1; $k--)
   {
    if($k > $i)
     echo " ";
    else
     echo $k;
   }
   echo "<br>";
  }