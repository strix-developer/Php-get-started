<?php

declare(strict_types=1);
// declare(strict_types=1);
//family name
echo "<h3>family name</h3>";
function familyName($fname, $age)
{
  echo "$fname Thakur $age.<br>";
}

familyName("Himanshu", "18");
familyName("Ketan", "19");
familyName("Yashi", "17");
familyName("Rohit", "19");
familyName("Rohan", "15");
//for
echo "<h3>for</h3>";
function forloop()
{
  $k = 1;
  for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j <= $i; $j++) {
      echo $k . " ";
      $k++;
    }
    echo "<br>";
  }
}
forloop();
echo "<br>";

function Height(int $height = 50)
{
  echo "The height is : $height <br>";
}

Height(1000);
Height();
Height(35);
Height(8);
//Add
echo "<h3>add</h3>";
function addNumbers(int $a, int $b)
{
  return $a + $b;
}
echo addNumbers(5, 5);

//Returning values
echo "<h3>Returning values</h3>";
function sum(int $x, int $y)
{
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

//Floatvalue
echo "<h3>floatvalue</h3>";
function floatvalue(float $a, float $b): float
{
  return $a + $b;
}
echo floatvalue(10.2, 20.2);

//floatnumber
echo "<h3>floatnumber</h3>";
function floatnumbers(float $a, float $b): int
{
  return (int)($a + $b);
}
echo floatnumbers(111.2, 555.2);
//forloop
echo "<h3>For loop</h3>";
function tiger()
{
  for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo ' * ';
    }
    echo '<br>';
  }
  for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
      echo ' * ';
    }
    echo '<br>';
  }
  for ($i = 1; $i <= 5; $i++) {
    for ($j = 4; $j >= $i; $j--) {
      echo '&nbsp;&nbsp;';
    }
    for ($k = 1; $k <= $i; $k++) {
      echo '*';
    }
    echo '<br>';
  }
}
tiger();
echo "<br>";
