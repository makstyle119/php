<?php
    // Simple Array
    $numbers = [1, 2, 3, 4, 5];
    $fruits = array('apple', 'orange', 'banana');

    print_r($numbers);
    var_dump($fruits);
    echo $fruits[1];

    // Associate Array
    $color = [
        'black' => '#000',
        'white' => '#fff'
    ];

    echo $color['black'];

    // Multi Dimension Array
    $people = [
        [
            'first_name' => 'Moiz',
            'last_name' => 'Ali',
            'email' => 'some.email@cool.com'
        ],
        [
            'first_name' => 'Maria',
            'last_name' => 'Khan',
            'email' => 'some.email2@cool.com'
        ]
    ];

    echo $people[1]['email'];

    // convert an array into json
    var_dump(json_encode($people));

?>
