<?php
$school = array(
    "school"=>[
        "students"=>[
            "class"=>["12th",
                "Section A"=>[
                    "Name"=>['Ramesh','Piyush','Rishav','Jitesh'],
                    "Roll No"=>[2000,2001,2002,2003],
                    "subject"=>[
                        "Physics"=>[
                            "Teacher"=>'Mohan',
                            "Timing"=>'9:00 to 10:00',
                            "Building"=>[
                                "Room No"=>'13',
                                "AC/NON AC"=>'AC',
                                "capacity"=>'72'
                            ]
                            ],
                        "Chemistry"=>[   
                        "Teacher"=>'Rita',
                        "Timing"=>'10:00AM to 11:00AM',
                        "Building"=>[
                            "Room No"=>'16',
                            "AC/NON AC"=>'AC',
                            "capacity"=>'45'
                        ]
                        ],
                        "Maths"=>[
                        "Teacher"=>'Ramesh',
                        "Timing"=>'11:00AM to 12:00AM',
                        "Building"=>[
                            "Room No"=>'06',
                            "AC/NON AC"=>'AC',
                            "capacity"=>'32'
                        ]
                        ],
                        "English"=>[
                        "Teacher"=>'Shayam',
                        "Timing"=>'1:00PM to 2:00PM',
                        "Building"=>[
                            "Room No"=>'13',
                            "AC/NON AC"=>'AC',
                            "capacity"=>'10'
                        ]
                        ],
                        ],
                    "Total students"=>'4'
                    ],
                "Section B"=>[
                    "Name"=>['Ram','Sham', 'Mohan'],
                    "Roll No"=>[1001,1002,1003],
                    "subject"=>[
                        "Physics"=>[
                        "Teacher"=>'Mohan',
                        "Timing"=>'9:00AM to 10:00AM',
                        "Building"=>[
                            "Room No"=>'07',
                            "AC/NON AC"=>'AC',
                            "capacity"=>'18'
                        ],
                        ],
                        "Chemistry"=>[
                        "Teacher"=>'Piyush',
                        "Timing"=>'10:00AM to 11:00AM',
                        "Building"=>[
                            "Room No"=>'25',
                            "AC/NON AC"=>'AC',
                            "capacity"=>'20'
                        ],
                    ],
                        "Maths"=>[
                        "Teacher"=>'Vikram',
                        "Timing"=>'11:00AM to 12:00AM',
                        "Building"=>[
                            "Room No"=>'24',
                            "AC/NON AC"=>'AC',
                            "capacity"=>'35'
                        ],
                    ],
                        "English"=>[
                        "Teacher"=>'Sailja',
                        "Timing"=>'1:00PM to 2:00PM',
                        "Building"=>[
                            "Room No"=>'22',
                            "AC/NON AC"=>'AC',
                            "capacity"=>'22'
                        ]
                        ],
                    ],
                    "Total students"=>'3'
                    ],
                "Section c"=>[
                    "Name"=>["Piyush,Gautam,Rahul"],
                    "Roll No"=>[3004,3005,3006],
                    "subject"=>[
                        "Physics"=>[
                        "Teacher"=>'Rohit',
                        "Timing"=>'9:00AM to 10:00AM',
                        "Building"=>[
                            "Room No"=>'21',
                            "AC/NON AC"=>'AC',
                            "capacity"=>'13'
                        ]
                        ],
                        "Cemistry"=>[
                        "Teacher"=>'Shilpa',
                        "Timing"=>'10:00AM to 11:00AM',
                        "Building"=>[
                            "Room No"=>'19',
                            "AC/NON AC"=>'AC',
                            "capacity"=>'39'
                        ]
                        ],
                        "Maths"=>[
                        "Teacher"=>'Manisha',
                        "Timing"=>'11:00AM to 12:00AM',
                        "Building"=>[
                            "Room No"=>'35',
                            "AC/NON AC"=>'NON AC',
                            "capacity"=>'full'],
                        ],
                        "English"=>[
                        "Teacher"=>'Soniya',
                        "Timing"=>'10:00AM to 11:00AM',
                        "Building"=>[
                            "Room No"=>'19',
                            "AC/NON AC"=>'AC',
                            "capacity"=>'65'
                         ]
                        ],
                    "Total students"=>'3'
                ]
                ],
            "Total students"=>'10'
            ],
        ]
        ],
            
        

           




            "Teachers"=>[
            ["Name"=>"Mohan",
                "qualification"=>'PHD in physics',
                "subject"=>'physics'],
                
            ["Name"=>'Rita',
                "qualification"=>"master's in chemistry",
                'subject'=>'chemistry'],

            ["Name"=>"Ramesh",
                "qualification"=>"master's in mathematics",
                "subject"=>"mathematics"],

            ["Name"=>"Shayam",
                "qualification"=>"PHD in litrature",
                "subject"=>"english"],

            ["Name"=>"Mohan",
                "qualification"=>"master's in physics",
                "subject"=>"physics"],

            ["Name"=>"Piyush",
                "qualification"=>"PHD in chemistry",
                "subject"=>"chemistry"],

            ["Name"=>"Vikram",
                "qualification"=>"PHD in mathematics",
                "subject"=>"mathematics"],

            ["Name"=>"Sailja",
                "qualification"=>"PHD in grammer",
                "subject"=>"english"],

            ["Name"=>"Rohit",
                "qualification"=>"master's in physics",
                "subject"=>"physics"],

            ["Name"=>"Shilpa",
                "qualification"=>"master's in chemistry",
                "subject"=>"chemistry"],

            ["Name"=>"Manisha",
                "qualification"=>"master's in mathematics",
                "subject"=>"mathematics"],

            ["Name"=>"Soniya",
                "qualification"=>"master's in litrature",
                "subject"=>"english"],

            "Total Teachers"=>'12'
            ],  
    
        );
        echo "<pre>";
        print_r($school);
        echo "</pre>";
        ?>