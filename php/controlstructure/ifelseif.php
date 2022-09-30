<?php

$a = 133;
$b = 133;
if ($a < $b) {
    echo "$a is smaller than $b" . "<br>";
} else if ($a == $b) {
    echo "$a is equal to $b";
} else {
    echo "$a is greater than $b" . "<br>";
}
echo "<br>";

$a = 1;
$b = 2;
$c = 3;
if (($a == 1 || $a == 2) && ($b == 2 || $b == 3) && ($c == 3 || $c == 4)) {
    echo "matches the condition";
}
echo "<br>";

$a = 0;
$b = 1;
$c = 2;
if (!($a == 0 || $a == 1) && ($b == 1 || $b == 2) && ($c == 2 || $c == 3)) {
    echo "matches the condition";
} else {
    echo "not matches the condition";
}
echo "<br>";

$speed = 110;
if ($speed < 30) {
    echo "you are driving slow";
} elseif ($speed > 30 && $speed < 60) {
    echo "Safe Driving";
} elseif ($speed > 60 && $speed < 100) {
    echo "High Speed";
} else {
    echo "Its dangerous";
}
echo "<br>";

$day = date("D");
if ($day == "Mon") {
    echo "Have a nice Monday!";
} elseif ($day == "Tue") {
    echo "Have a nice Tuesday!";
} elseif ($day == "Wed") {
    echo "Have a nice Wedneday!";
} elseif ($day == "Thu") {
    echo "Have a nice Thursday!";
} elseif ($day == "Fri") {
    echo "Have a nice Friday!";
} elseif ($day == "Sat") {
    echo "Have a nice Saturday!";
} else {
    echo "Have a nice Sunday!";
}
echo "<br>";

$grade = 97;
if ($grade >= 96 && $grade <= 100) {
    echo "Grade S+";
} elseif ($grade >= 91 && $grade <= 95) {
    echo "Grade S";
} elseif ($grade >= 86 && $grade <= 90) {
    echo "Grade A+";
} elseif ($grade >= 81 && $grade <= 85) {
    echo "Grade A";
} elseif ($grade >= 71 && $grade <= 80) {
    echo "Grade B+";
} elseif ($grade >= 61 && $grade <= 70) {
    echo "Grade B";
} elseif ($grade >= 51 && $grade <= 60) {
    echo "Grade C";
} elseif ($grade >= 33 && $grade <= 50) {
    echo "Grade D";
} else {
    echo "FAIL :";
    if ($grade >= 30 && $grade <= 32) {
        echo " Grade F";
    } elseif ($grade >= 26 && $grade <= 29) {
        echo " Grade G";
    } elseif ($grade >= 21 && $grade <= 25) {
        echo " Grade H";
    } else {
        echo " No Grade";
    }
}
echo "<br>";

date_default_timezone_set('Asia/Kolkata');
$date = date('d-M-Y h:i:s:a');
if ($date < 12) {
    echo "Good Morning !";
} elseif ($date >= 12 || $date < 16) {
    echo "Good afternoon !";
} elseif ($date >= 16 || $date < 19) {
    echo "Good evening !";
} else {
    echo "Good Night";
}
echo "<br>";
