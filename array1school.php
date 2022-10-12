<?php
//section A-----------------------------------------------------------------------------------------------------//

$school = array (
  "school"=>[
    
    "students"=>[
      "class"=>[
        //section--A
        "section-A"=> [
          'name $ rollno'=>['rishav'=>'1',
          'jitesh'=>'2',
          'rishi'=>'3',
          'priya'=>'4',

          'total students'=>'4',
        
        ], 
        'subject'=>['chemistry','math','physics','english'],
        
        'subject teacher'=>['soniya','vikas','sushma','sunita'],
        'subject timing'=>['09:00','10:00','11:00','12:00'],
        


        

          
        

        
        //section B-----------------------------------------------------------------------------------------------//
        [

          "Section-B"=>[
            'name & rollno'=>[
              'rishav dhiman'=>'1',
              'rishi'=>'2',
              'abc'=>'3',
              'def'=>'4',
            ],
            'subject'=>['chemistry','math','physics','english'],
            'subject teacher'=>['soniya','sushma','priya','vikas'],
            'class timimg'=>['02:00','03:00','04:00','05:00'],
            'total students'=>['4',],
            

            
          ]


        ]
        ]
      ]
      ]
  ]
      );
      echo "<pre>";
print_r($school);
echo "</pre>";