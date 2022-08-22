<?php
$s = array(
    'School' =>
    [ //school
        [   //students  
            'Students' =>
            [ //class
                'Class' =>
                [
                    [ //section a
                        'Section A' =>
                        [
                            'Name' => [ //name
                                'Sunil', 'Anil', 'Vikash', 'Ankush', 'Devender', 'Dhirender', 'Akshay', 'Rahul', 'Abhishek', 'Shammi'
                            ],

                            'Roll Number' => [ //roll number
                                'Sunil' => '01', 'Anil' => '02', 'Vikash' => '03', 'Ankush' => '04', 'Devender' => '05',
                                'Dhirender' => '06', 'Akshay' => '07', 'Rahul' => '08', 'Abhishek' => '09', 'Shammi' => '10'
                            ],

                            'Subject' => [ //subjects
                                'Hindi' => [ //hindi
                                    'Teacher' => ['Nishant'], 'Timing' => ['09:00am'],
                                    'Building' => ['Room NUmber' => ['101'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                                'Math' => [ //math
                                    'Teacher' => ['Prashant'], 'Timing' => ['10:00am'],
                                    'Building' => ['Room NUmber' => ['101'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                                'English' => [ //english
                                    'Teacher' => ['Vikash'], 'Timing' => ['11:00am'],
                                    'Building' => ['Room NUmber' => ['101'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                                'Computer' => [ //computer
                                    'Teacher' => ['Akshit'], 'Timing' => ['01:00pm'],
                                    'Building' => ['Room NUmber' => ['101'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                            ],
                            'Total Students' => [ //total students
                                '10'
                            ]
                        ],
                    ],

                    [ //section b
                        'Section B' =>
                        [
                            'Name' => [ //name
                                'Sunil', 'Anil', 'Vikash', 'Ankush', 'Devender', 'Dhirender', 'Akshay', 'Rahul', 'Abhishek', 'Shammi'
                            ],

                            'Roll Number' => [ //roll number
                                'Sunil' => '01', 'Anil' => '02', 'Vikash' => '03', 'Ankush' => '04', 'Devender' => '05',
                                'Dhirender' => '06', 'Akshay' => '07', 'Rahul' => '08', 'Abhishek' => '09', 'Shammi' => '10'
                            ],

                            'Subject' => [ //subjects
                                'Hindi' => [ //hindi
                                    'Teacher' => ['Sharma'], 'Timing' => ['09:00am'],
                                    'Building' => ['Room NUmber' => ['102'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                                'Math' => [ //math
                                    'Teacher' => ['Guleria'], 'Timing' => ['10:00am'],
                                    'Building' => ['Room NUmber' => ['102'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                                'English' => [ //english
                                    'Teacher' => ['Singh'], 'Timing' => ['11:00am'],
                                    'Building' => ['Room NUmber' => ['102'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                                'Computer' => [ //computer
                                    'Teacher' => ['Verma'], 'Timing' => ['01:00pm'],
                                    'Building' => ['Room NUmber' => ['102'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                            ],
                            'Total Students' => [ //total students
                                '10'
                            ]
                        ],
                    ],

                    [ //section c
                        'Section C' =>
                        [
                            'Name' => [ //name
                                'Sunil', 'Anil', 'Vikash', 'Ankush', 'Devender', 'Dhirender', 'Akshay', 'Rahul', 'Abhishek', 'Shammi'
                            ],

                            'Roll Number' => [ //roll number
                                'Sunil' => '01', 'Anil' => '02', 'Vikash' => '03', 'Ankush' => '04', 'Devender' => '05',
                                'Dhirender' => '06', 'Akshay' => '07', 'Rahul' => '08', 'Abhishek' => '09', 'Shammi' => '10'
                            ],

                            'Subject' => [ //subjects
                                'Hindi' => [ //hindi
                                    'Teacher' => ['Kumar'], 'Timing' => ['09:00am'],
                                    'Building' => ['Room NUmber' => ['103'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                                'Math' => [ //math
                                    'Teacher' => ['Thakur'], 'Timing' => ['10:00am'],
                                    'Building' => ['Room NUmber' => ['103'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                                'English' => [ //english
                                    'Teacher' => ['John'], 'Timing' => ['11:00am'],
                                    'Building' => ['Room NUmber' => ['103'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                                'Computer' => [ //computer
                                    'Teacher' => ['Ruchita'], 'Timing' => ['01:00pm'],
                                    'Building' => ['Room NUmber' => ['103'], 'AC/NON AC' => ['Ac'], 'Capacity' => ['70']]
                                ],
                            ],
                            'Total Students' => [ //total students
                                '10'
                            ]
                        ],
                    ],

                ],
            ],

            [ //total students
                'Total Students' => ['30'],
            ],
        ],

        [ //teachers

            [ //teacher
                'Teachers' =>
                ['Name' => [ //name
                    'Nishant', 'Prashant', 'Vikash', 'Akshit', 'Sharma', 'Guleria',
                    'Singh', 'Verma', 'Kumar', 'Thakur', 'John', 'Ruchita'
                ]],

                ['Qualification' => [ //Qualification
                    'Nishant' => 'PHD', 'Prashant' => 'PHD', 'Vikash' => 'PHD', 'Akshit' => 'PHD', 'Sharma' => 'PHD', 'Guleria' => 'PHD',
                    'Singh' => 'PHD', 'Verma' => 'PHD', 'Kumar' => 'PHD', 'Thakur' => 'PHD', 'John' => 'PHD', 'Ruchita' => 'PHD'
                ]],

                ['Subject' => [ //subjects
                    'Hindi' => ['Nishant', 'Sharma', 'Kumar'],
                    'Math' => ['Prashant', 'Guleria', 'Thakur'],
                    'English' => ['Vikash', 'Singh', 'John'],
                    'Computer' => ['Akshit', 'Verma', 'Ruchita'],
                ]],
            ],
            [ //total teachers
                'Total Teachers' => ['12'],
            ],
        ],
    ],

);

print_r($s);
