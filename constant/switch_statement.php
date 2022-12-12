<?php
//
echo "<h1> 1. </h1>";
$age= 12;
switch($age){
    case 12:
        echo "you are 12 year old <br>";
        break;
        case 25:
            echo "you are 25 years old <br>";
            break;
            case 40:
                echo "you are 40 years old <br>";
                break;
                default:
                echo "your age is wired <br>";

}

echo "<br>";
//
echo "<h1> 2. </h1>";
$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday." . $today=date("d/F/Y") . " And Clean your house.";
        break;
    case "Tue":
        echo "Today is Tuesday." . $today=date("d/F/Y") . " And Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday." . $today=date("d/F/Y") . " And Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday." .  $today=date("d/F/Y") . " And Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday." . $today=date("d/F/Y") . " And Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday." . $today=date("d/F/Y") . " And Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday." .  $today=date("d/F/Y") . " And Do some rest.";
        break;
    default:
        echo "No information available for that day.";
        break;
}

echo "<br>";
echo "<h1> 3. </h1>";
$today =date("d/F/Y-l");
echo $today . "</br>";
date_default_timezone_set("asia/kolkata");
$today=date("h:i:sA");
echo $today;

echo "<br>";
//
echo "<h1> 4. </h1>";
$number = array ("One", "Two", "Three", "Stop", "Four");  
    foreach ($number as $element) {  
        if ($element == "Stop") {  
            continue;  
        }  
        echo "$element </br>";  
    }  

    echo "<br>";
//
echo "<h1> 5. </h1>";
    $i = 1;  
    while ($i<=20) {  
        if ($i %2 == 1) {  
            $i++;  
            continue;  
              
        }  
        echo $i;  
        echo "</br>";  
        $i++;  
    }

    echo "<br>";
//
echo "<h1> 6. </h1>";
$number = array ("One", "Two", "Three", "Stop", "Four");  
foreach ($number as $element) {  
if ($element == "Stop") {  
break;  
}  
echo "$element </br>";  
}   
   
echo "<br>";
//
echo "<h1> 7. </h1>";
echo "<h2>Using the break Statement</h2>";
   for($i=1; $i<=5; $i++)
   {
      if($i==3)
         break;
      echo $i, "<br>";
   }
   
   echo "<h2>Using the continue Statement</h2>";
   for($i=1; $i<=5; $i++)
   {
      if($i==3)
         continue;
      echo $i, "<br>";
   }

echo "<br>";
//
echo "<h1> 8. </h1>";
$i= array('Apple','Pomegranate', 'Mango', 'Guava', 'Orange', 'Pineapple');
foreach ($i as $a){

   if ($a=='Guava'){
     continue;
   }
   echo "The fruit is "."$a";
   echo "<br>";
   
}

echo "<br>";
//
echo "<h1> 9. </h1>";
$j= array("cake","pizza","burger","paasta");
foreach ($j as $p){
    if ($p=="burger")
    break;
    echo "The food is "."$p";
    echo "<br>";
}
?>