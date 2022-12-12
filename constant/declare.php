<?php

//ticks directive
echo "<h1> 1. </h1>";
function myfunction(){
    echo "Hello World<br>";
}
 register_tick_function("myfunction");
 declare (ticks=5){
    for ($i=1; $i<=10; $i++){
       echo $i."<br>";

    }
 }

 echo "<br>";
 //strict_types directive
 function myfunc($param1, $param2) {
    echo "In first tick function with params $param1 $param2<br>";
}

function myfunc2($param1, $param2, $param3) {
    echo "In second tick function with params $param1 $param2 $param3<br>";
}

function myfunc3($param1) {
    echo "In third tick function with params $param1<br>";
}

register_tick_function("myfunc", "hello", "world");
register_tick_function("myfunc2", "how", "are", "you?");
register_tick_function("myfunc3", "goodbye!");
unregister_tick_function("myfunc2");

declare(ticks=10);
for($i = 0; $i < 20; ++$i) {
    echo "Hello<br>";
}

?>