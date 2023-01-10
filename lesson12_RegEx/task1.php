<?php

/*
1. Parašykite funkciją, kuri pašalintų paskutinį žodį iš stringo
"A car is standing in a parkinglot." --> "A car is standing in a"
*/

$sentence = "A car is standing in a parkinglot.";
function deleteLastWord($string): string
{
    $pattern = '/\w+\./';
    $changes = '';
    $result = preg_replace($pattern, $changes, $string);
    return $result;
}
print_r(deleteLastWord($sentence));