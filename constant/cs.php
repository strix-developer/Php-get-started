<?php
//if statement
$x=40;
if($x>30){
    echo"$x is greater then 30";
}
echo"<br>";
//if else statement
$x=50;
if($x>70){
    echo"$x is greater then 70";
}
else{
    echo"$x is smaller then 70";
}

echo"<br>";
//


$x=100;
if($x==100){
    echo"x is same ";
}
else{
    echo"x is not same";
}
echo"<br>";
//
$name="jitesh!";
$gender="male";
if($gender=="male"){
    echo"Hello Mr." .$name;
}
else{
    echo"Hello Miss." .$name;

}
echo"<br>";
//if else if statement
$per=58;
if($per>=80 && $per<=100){
    echo"you are in 1st Division.";
}
    elseif($per>=70 && $per<=80){
        echo"you are in 2nd Division.";
    }
    elseif($per>=50 && $per<=70){
        echo"you are in 3rd Division.";
    }
    elseif($per>=33 && $per<=50){
        echo"you are in 4th Division.";
    }
    elseif($per<33){
        echo"you are fail.";
    }
    else{
        echo"please enter valid percentage.";
        }


echo"<br>";

//

$overtime=100;
if ($overtime<=50)
{
$pay_amt=12000;
$medical=10000;
echo "Pay Amount : $pay_amt : Medical : $medical";
}
else
{
$pay_amt=20000;
$medical=1500;
echo "Pay Amount : $pay_amt : Medical : $medical";
}
echo"<br>";

//

$role = 'author';
$message = '';

if ('admin' === $role) {
	$message = 'Welcome, admin!';
} elseif ('editor' === $role) {
	$message = 'Welcome! You have some pending articles to edit';
} elseif ('author' === $role) {
	$message = 'Welcome! Do you want to publish the draft article?';
} elseif ('subscriber' === $role) {
	$message = 'Welcome! Check out some new articles.';
} else {
	$message = 'Sorry! You are not authorized to access this page';
}

echo $message;



?>
