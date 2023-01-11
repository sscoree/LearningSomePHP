<?php

/*
4. Parašykite funkciją, kuri užmaskuotų dalį vartotojo duomenų. Pavardės ir gimimo metų simboliai
turėtų būti pakeisti i simbolius 'X'.
"John Smith, 1979 05 15" --> "John XXXXX, XXXX 05 15"
*/

function obfuscatePrivateInfo(string $info): string
{
    $matches = [];
    $matched = preg_match('/^(\w+) (\w+), (\d{4}) (\d{2}) (\d{2})$/', $info, $matches);

    if ($matched === 0)
        return $info;

    $lastName = $matches[2];
    $lastNameObfuscated = str_pad('', strlen($lastName), 'X');

    return "$matches[1] $lastNameObfuscated, XXXX $matches[4] $matches[5]";
}

var_dump(obfuscatePrivateInfo('John Smith, 1979 05 15'));