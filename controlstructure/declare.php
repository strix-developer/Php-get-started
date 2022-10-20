<?php
$count = 0;
function example() {
  global $count;
  $count++;
  echo "$count instructions executed<br>";
}

register_tick_function('example');

declare(ticks=1) {
  $cars = ["Ford", "Volvo", "BMW"];
  foreach($cars as $car) {
    echo "$car <br>";
  }
}
?>