<h1>array
</h1>

<h2>indexed</h2>
<?php
$x = array('one','two');
echo $x[0]."<br>".$x[1];
echo '<br>';

$y = ["oneee","twooo"];
echo $y[1].'<br>'.$y[0];
echo "<br>";

$z = array('three','four');
echo $z[0]."<br>".$z[1];
?>

<h2>associative</h2>
<?php


$age = array('Ben'=>'18','Ram'=>'20');
echo 'Ben  is ' .$age["Ben"]. " years old"."<br>";
echo 'Ram  is ' .$age["Ram"]. " years old";

?>

<h2>multi-dimensional</h2>
<?php
$car = array(

    array('Volvo','22','18'),
    array("BMW",'15','13'),
    array("Saab",'5','2'),
    array("Land Rover",'17','15')

);

echo  $car[3][0].'-->'.' sale'.'--'.$car[3][1].' remaining'.'--'.$car[3][2].'<br>'; 
echo  $car[0][0].'-->'.' sale'.'--'.$car[0][1].' remaining'.'--'.$car[0][2].'<br>';
echo  $car[1][0].'-->'.' sale'.'--'.$car[1][1].' remaining'.'--'.$car[2][2].'<br>';
echo  $car[2][0].'-->'.' sale'.'--'.$car[2][1].' remaining'.'--'.$car[2][2].'<br>';

?>
