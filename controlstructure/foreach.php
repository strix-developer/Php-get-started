<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $val) {
    echo "$x = $val<br>";
}
//Second
echo "<h3>Second</h3>";
$cars = array("Swift" => "2004", "Honda" => "2000", "Tata Tiago" => "2012");

foreach ($cars as $x => $val) {
    echo "$x = $val<br>";
}

//Associative
echo "<h3>Associative</h3>";
$x = ([
    "Ktm Rc 390" => "BS4,BS6,2022 Edition",
    "Ktm Rc 200" => "BS4,BS6,2022 Edition",
    "Ktm Rc 125" => "BS4,BS6,2022 Edition",
    "Splender" => "BS4,BS6,2022 Edition",
    "Pulser 125" => "BS4,BS6,2022 Edition",
    "Pulser 180" => "BS4,BS6,2022 Edition",
    "Pulser 200" => "BS4,BS6,2022 Edition",
]
);
foreach ($x as $y => $val) {
    echo "$y = $val<br>";
}


//Multiple
echo "<h3>Multiple</h3>";
    $superheroes = array(
        "spider-man" => array(
            "name" => "Peter Parker",
            "email" => "peterparker@mail.com",
        ),
        "super-man" => array(
            "name" => "Clark Kent",
            "email" => "clarkkent@mail.com",
        ),
        "iron-man" => array(
            "name" => "Tony Stark",
            "email" => "tonystark@mail.com",
        )
    );

    $keys = array_keys($superheroes);
    for ($i = 0; $i < count($superheroes); $i++) {
        echo $keys[$i] . "{<br>";
        foreach ($superheroes[$keys[$i]] as $key => $value) {
            echo $key . " : " . $value . "<br>";
        }
        echo "}<br>";
    }
