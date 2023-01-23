<?php

/*
2. Parašykite funkciją, kuri patikrintų, ar tekstas atitinka lietuviško mobilaus telefono numerio formatą
"+37062345678" - true
"+37012345678" - false
"+3706234567" - false
"+3706234567a" - false
*/

$numbers = [
    "+37062345678",
    "+37012345678",
    "+3706234567" ,
    "+3706234567a"
];

function isValidMobile(string $mobile): bool
{
    $pattern = '/^(\+3706)(\d{7})$/';
    if (preg_match($pattern, $mobile)){
        return true;
    } else {
        return false;
    }
}
foreach ($numbers as $number) {
    var_dump(isValidMobile($number));
}
