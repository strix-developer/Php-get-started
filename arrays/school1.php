<?php
$school=array(
    
     "student"=>[
        'class'=>[
            //section-A----------------------------------------------------------------------------------------------------//
            'section-A'=>[
                'Name'=>['rish','jitesh','sahil'],
                'Roll No'=>['1','2','3'], 
                'subject'=>[
                    'physics'=>[
                        'teacher'=>'vikas',
                        'timimg'=>'09:00 to 10:00',
                        'building'=>[
                            'room no'=>'101',
                            'AC/NON AC'=>'AC',
                            'capcity'=>'10',
                        ]
                        ],
                        'English'=>[
                    'teacher'=>'soniya',
                        'timimg'=>'10:00 to 11:00',
                        'building'=>[
                            'room no'=>'103',
                            
                            'AC/NON AC'=>'AC',
                            'capcity'=>'10',
                        ]
                        ],
                        'computer'=>[
                            'teacher'=>'jitu',
                        'timimg'=>'11:20 to 12:20',
                        'building'=>[
                            'Block-C',
                            'room no'=>'105',
                            'AC/NON AC'=>'AC',
                            'capcity'=>'10',

                        ]
                        ],
                        'math'=>[
                            'teacher'=>'chandu',
                        'timimg'=>'12:20 to 01:20',
                        'building'=>[
                            'Block-D',
                            'room no'=>'106',
                            'AC/NON AC'=>' NON AC',
                            'capcity'=>'10',
                        ],
                       
                
                             
                        ],
                       
                    ],
                    'total student'=>'3'
            
                        ],
                        //section-B--------------------------------------------------------------------------------------//
                        "section-B"=>[
                            'Name'=>['mukesh','jitesh','pintu'],
                'Roll No'=>['1','2','3'],
                'subject'=>[
                    'physics'=>[
                        'teacher'=>'mahesh',
                        'timimg'=>'09:00 to 10:00',
                        'building'=>[
                            'room no'=>'201',
                            'AC/NON AC'=>'AC',
                            'capcity'=>'10',
                        ]
                        ],
                        'chemisty'=>[
                    'teacher'=>'Neel ram',
                        'timimg'=>'10:00 to 11:00', 
                        'building'=>[
                            'room no'=>'203',
                            'AC/NON AC'=>'AC',
                            'capcity'=>'10',
                        ]
                        ],
                        'computer'=>[
                            'teacher'=>'jitram',
                        'timimg'=>'11:20 to 12:20',
                        'building'=>[
                            'Block-C',
                            'room no'=>'205',
                            'AC/NON AC'=>'AC',
                            'capcity'=>'10',

                        ]
                        ],
                        'math'=>[
                            'teacher'=>'megh singh',
                        'timimg'=>'12:20 to 01:20',
                        'building'=>[
                            'Block-D',
                            'room no'=>'206',
                            'AC/NON AC'=>' NON AC',
                            'capcity'=>'10',
                        ]
                        
                
                             
                ]
                
                        ],
                'total student'=>'3'

                        ],
                        //section-C------------------------------------------------------------------------------------------------//
                        "section-c"=>[

                            'Name'=>['Rishi','naman','jitesh'],
                'Roll No'=>['1','2','3'],
                'subject'=>[
                    'physics'=>[
                        'teacher'=>'vikas',
                        'timimg'=>'02:20 to 03:20',
                        'building'=>[
                            'room no'=>'301',
                            'AC/NON AC'=>'AC',
                            'capcity'=>'10',
                        ]
                        ],
                        'chemisty'=>[
                    'teacher'=>'sonu',
                        'timimg'=>'03:20 to 04:20',
                        'building'=>[
                            'room no'=>'303',
                            'AC/NON AC'=>'AC',
                            'capcity'=>'10',
                        ]
                        ],
                        'computer'=>[
                            'teacher'=>'jitu',
                        'timimg'=>'04:20 to 05:20',
                        'building'=>[
                            'Block-C',
                            'room no'=>'305',
                            'AC/NON AC'=>'AC',
                            'capcity'=>'10',

                        ],
                        ],
                        'math'=>[
                            'teacher'=>'chandu',
                        'timimg'=>'05:20 to 06:00',
                        'building'=>[
                            'Block-D',
                            'room no'=>'306',
                            'AC/NON AC'=>' NON AC',
                            'capcity'=>'10',
                        ]
                        
                
                             
                 ]
                   
                        ],
                'total student'=>'3'

                        ],


        'total students'=>'9'

        
                    ],
                    ],
              //teachers---------------------------------------------------------------------------------------------------//
     
     "teacher"=>[
        ['Name'=>'soniya',
        'Qualification'=>' english',
        'Subject'=>'english'],

        [
            
        'Name'=>['jitu',
        'Qualification'=>' masters of computer',
        'Subject'=>'computer'],
        ],
        [
            "name"=>['chandu',
            'Qualification'=> 'phd in math',
            'subject'=>'math'],
        ],
        [
            "name"=>[
                'vikas',
                "Qualification"=>'phd in physics',
                'subject'=>'physics',
            ]
            ],
            [
                "name"=>[
                    'mahesh',
                    "Qualification"=>'phd in physics',
                    'subject'=>'physics',
                ]
                ],
                [
                    "name"=>[
                        'neel ram',
                        "Qualification"=>'phd in chemistry',
                        'subject'=>'chemistry',
                    ]
                    ],
                    [
                        "name"=>[
                            'neel ram',
                            "Qualification"=>'phd in chemistry',
                            'subject'=>'chemistry',
                        ]
                        ],
                    [
                     
                        "name"=>[
                            'megh singh',
                            "Qualification"=>'phd in math',
                            'subject'=>'math',
                        ],
                    ],
        
        "total teacher"=>'7 ',
 ]
     );
echo "<pre>";
print_r($school);
echo "</pre>"; 
