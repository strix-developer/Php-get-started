<?php

$a = 0;
while ($a <= 10) {
    $b = 0;
    while ($b <= $a) {
        echo "&nbsp&#174&nbsp";
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
        echo "&nbsp&#169&nbsp";
        $b++;
    }
    $a--;
    echo "<br>";
}
echo "<br>";


$a = 0;
while ($a <= 15) {
    $b = 0;
    while ($b <= $a) {
        echo "&nbsp&nbsp";
        $b++;
    }
    $b = 0;
    while ($b < 15 - $a) {
        echo "+";
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
        echo "&nbsp&nbsp";
        $b++;
    }
    $b = 0;
    while ($b < 10 - $a) {
        echo "&nbsp&nbsp&#162";
        $b++;
    }
    $a--;
    echo "<br>";
}
echo "<br>";
