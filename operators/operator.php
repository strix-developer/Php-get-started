<?php
 
 $var=10;

   if($var<13){

    echo "10 is less then 13 ";

   }else {
    echo "0";
   }
   echo"<br>";

//
$car_1 = [
    'year' => 2003,
    'make' => 'Chevy',
    'model' => 'Corvette'
];

$car_2 = [
    'year' => '2003',
    'make' => 'Chevy',
    'model' => 'Corvette'
];

var_dump( $car_1 == $car_2 );
var_dump( $car_1 === $car_2 );

var_dump( $car_1 != $car_2 );
var_dump( $car_1 !== $car_2 );

echo "<br>";
//
$birds = [ 'Scarlet Macaw', 'White Cockatoo', 'Buff-faced Pygmy Parrot' ];
$big_cats = [ 'Tiger', 'Lion', 'Cheetah', 'Puma' ];

$animals = $birds + $big_cats;

print_r( $animals );

$fav_animals = array_merge($birds, $big_cats);
print_r($fav_animals);

?>