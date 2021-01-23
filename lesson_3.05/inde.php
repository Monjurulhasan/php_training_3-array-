<?php 
// $foods = [
//     'vegetables' => explode(', ','brinjal, brocoli, carrot, tomato'),
//     'fruits' => explode(', ','orange, apple, banana'),
//     'drinks' => explode(', ','water, milk, coffee'),
// ];

// print_r($foods);

// array_push($foods['drinks'], 'Orange juice');

// print_r($foods);

// echo $foods['fruits'][0];

$sample1 = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd',
        ],
    ],
];

// echo $sample1['test']['test-again'][2];

$sample2 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,[5,6,7]]
];
echo $sample2[3][3][1];