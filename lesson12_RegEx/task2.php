<?php

/*
2. Parašykite funkciją, kuri patikrintų, ar tekstas atitinka lietuviško mobilaus telefono numerio formatą
"+37062345678" - true
"+37012345678" - false
"+3706234567" - false
"+3706234567a" - false
*/

function isValidMobile(string $mobile): bool
{
    $pattern = '/^(\+3706)(\d{7})$/';
    return preg_match($pattern, $mobile);
}
var_dump(isValidMobile('+3706234567a'));