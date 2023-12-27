<?php 
    //simple array
    $numbers = [1, 2, 3, 4, 5];
    $fruits = array('apple', 'orange');

    print_r($numbers);
    var_dump($fruits);  //var_dump($numbers) gives additional information
                        //so used on debugging

    //accessing the array
    echo $fruits[1];

    //Associative array
    $colors = [
        1 => 'red',
        3 => 'green',
        6 => 'yellow',
    ];
    //we can do this too
    echo $colors[3];

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f',
    ];

    echo $hex['blue'];


    $person = [
        'first_name' => 'Jack',
        'last_name' => 'Aakash',
        'email' => 'jackaakash4@gmail.com'
    ];

    echo $person['email'];

    //Multi dimentional arrays or nested arrays
    $people = [
        [
            'first_name' => 'Jack',
            'last_name' => 'Aakash',
            'email' => 'jackaakash4@gmail.com'
        ],
        [
            'first_name' => 'NO',
            'last_name' => 'Name',
            'email' => 'jackaakash44@gmail.com'
        ],
        [
            'first_name' => 'Punk',
            'last_name' => 'Aakash',
            'email' => 'jackaakash444@gmail.com'
        ],
        [
            'first_name' => 'James',
            'last_name' => 'Aakash',
            'email' => 'jackaakash4444@gmail.com'
        ]
        ];

    //accessing nested arrays in php
    echo $people[0]['first_name'];
    echo $people[1]['last_name'];
    echo $people[2]['email'];
    echo $people[3]['first_name'];
?>