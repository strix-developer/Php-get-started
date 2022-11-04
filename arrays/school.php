<?php
//section A--------------------------------------------------------------------------------------------//
$school = array('student'=>[
'class'=>[
'section A'=>[
    'Name & roll no'=>['rishav'=>'1',
    'jitesh'=>'2','sahil'=>'3'],
    'subject'=>[
        'chemistry','physics','math','English','computer'
    ],
    'total students'=>['3'],
    'teacher'=>['soniya','vikas','sushma','priya'],
    'timing'=>['09:00','10:00','11:00','12:00'],
    'building'=>['room no'=>'01','ac/non','capcity'=>'10'],
],
//section-b---------------------------------------------------------------------------------------------//
'section B'=>[
    'Name & roll no'=>['rishav'=>'1',
    'jitesh'=>'2','sahil'=>'3'],
    'subject'=>[
        'chemistry','physics','math','English','computer'
    ],
    'total students'=>['3'],
    'teacher'=>['soniya','vikas','sushma','priya'],
    'timing'=>['01:00','02:00','03:00','04:00'],
    'building'=>['room no'=>'02','AC','capcity'=>'10'],
]
]
]


,'teacher');
echo"<pre>";
print_r($school);
echo "</pre>";




?>
