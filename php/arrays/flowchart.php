<?php
$school = array(
    'students' => [ //students
        [
            'class' => [ //class
                [
                    'section A' => [ //section A
                        'name' => [
                            'Sunil', 'Anil', 'Vikash', 'Ankush', 'Devender',
                            'Dhirender', 'Akshay', 'Rahul', 'Abhishek', 'Shammi'
                        ],

                        'roll number' => [ //roll number
                            '01' => 'Sunil', '02' => 'Anil', '03' => 'Vikash', '04' => 'Ankush', '05' => 'Devender',
                            '06' => 'Dhirender', '07' => 'Akshay', '08' => 'Rahul', '09' => 'Abhishek', '10' => 'Shammi'
                        ],

                        'subject' => [ //subjects
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

                        'total students' => [10],
                    ],
                ],

                [
                    'section B' => [ //section B
                        'name' => [ //name
                            'Sunil', 'Anil', 'Vikash', 'Ankush', 'Devender',
                            'Dhirender', 'Akshay', 'Rahul', 'Abhishek', 'Shammi'
                        ],

                        'roll number' => [ //roll number
                            '01' => 'Sunil', '02' => 'Anil', '03' => 'Vikash', '04' => 'Ankush', '05' => 'Devender',
                            '06' => 'Dhirender', '07' => 'Akshay', '08' => 'Rahul', '09' => 'Abhishek', '10' => 'Shammi'

                        'subject' => [ //subjects
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

                        'total students' => [10],
                    ]
                ],

                [
                    'section C' => [ //section C
                        'name' => [ //name
                            'Sunil', 'Anil', 'Vikash', 'Ankush', 'Devender', 'Dhirender', 'Akshay', 'Rahul', 'Abhishek', 'Shammi'
                        ],

                        'roll number' => [ //roll number
                            '01' => 'Sunil', '02' => 'Anil', '03' => 'Vikash', '04' => 'Ankush', '05' => 'Devender',
                            '06' => 'Dhirender', '07' => 'Akshay', '08' => 'Rahul', '09' => 'Abhishek', '10' => 'Shammi'
                        ],

                        'subject' => [ //subjects
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

                        'total students' => [10]
                    ]
                ],
            ],
        ],

        [ //total students
            'total students' => [30]
        ],
    ],

    'teachers' => [ //teachers
        'name' => [
            'Nishant-PHD-HINDI', 'Prashant-PHD-MATH', 'Vikash-PHD-ENGLISH', 'Akshit-PHD-COMPUTER',
            'Sharma-PHD-HINDI', 'Guleria-PHD-MATH', 'Singh-PHD-ENGLISH', 'Verma-PHD-COMPUTER',
            'Kumar-PHD-HINDI', 'Thakur-PHD-MATH', 'John-PHD-ENGLISH', 'Ruchita-PHD-COMPUTER'
        ],
    ],

    'total teachers' => [12],

);

print_r($school['teachers']['name'][0]);
