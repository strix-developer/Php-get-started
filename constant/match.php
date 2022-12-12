<?php
//
echo "<h1> 1. </h1>";
echo match(2){
    1=>"company",
    2=>"employee",
    3=>"department",
};
echo "<br>";
//
echo "<h1> 2. </h1>";
$langs = ['russian', 'slovak', 'german', 'swedish', 'hungarian', 'french', 'spanish'];

echo("say hello" . "<br>");

foreach ($langs as $lang) {

    $res = match ($lang) {
        'russian' => 'привет',
        'hungarian' => 'szia',
        'french' => 'salut',
        'spanish' => 'hola',
        'slovak' => 'ahoj',
        'german' => 'hallo',
        'swedish' => 'Hallå'
    };

    echo "$res" . "<br>";
}
echo "<br>";
//
echo "<h1> 3. </h1>";
$grades = ['A', 'B', 'C', 'D', 'E', 'F', 'FX'];

foreach ($grades as $grade) {

    $res = match ($grade) {
        'A' , 'B' , 'C' , 'D' , 'E' , 'F' => 'passed',
        'FX' => 'failed'
    };

    echo "$res" . "<br>";
}

echo "<br>";



?>