<?php

/*
1. Parašykite funkciją, kuri pašalintų paskutinį žodį iš stringo
"A car is standing in a parkinglot." --> "A car is standing in a"
*/

$sentence = "A car is standing in a parkinglot.";
function replaceLastWord($string): string
{
    $pattern = '/ [\w-]+\.$/';
    $changes = '';
    return preg_replace($pattern, $changes, $string);
}
print_r(replaceLastWord($sentence));