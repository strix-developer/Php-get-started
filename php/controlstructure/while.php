<?php

$a = 0;
while ($a <= 10) {
    $b = 0;
    while ($b <= $a) {
        echo "&nbsp * &nbsp";
        $b++;
    }
    $a++;
    echo "<br>";
}
echo "<br>";

$a = 10;
while ($a >= 0) {
    $b = 0;
    while ($b <= $a) {
        echo "&nbsp * &nbsp";
        $b++;
    }
    $a--;
    echo "<br>";
}
echo "<br>";


$a = 0;
while ($a <= 10) {
    $b = 0;
    while ($b <= $a) {
        echo "&nbsp ";
        $b++;
    }
    $b = 0;
    while ($b < 10 - $a) {
        echo "&nbsp*";
        $b++;
    }
    $a++;
    echo " <br> ";
}
echo "<br>";


$a = 10;
while ($a >= 0) {
    $b = 0;
    while ($b <= $a) {
        echo "&nbsp ";
        $b++;
    }
    $b = 0;
    while ($b < 10 - $a) {
        echo "&nbsp +";
        $b++;
    }
    $a--;
    echo " <br> ";
}
echo "<br>";
