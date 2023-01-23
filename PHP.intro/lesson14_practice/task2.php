<?php

$numbers = [
    [0, 1],
    [1, 0, 2],
    [
        0,
        [
            0, 1, 99,
            [
                10, 44, 555,
            ],
        ],
    ],
];

function task2(array $array): int
{
    return $array[2][1][3][2];
}
var_dump(task2($numbers));