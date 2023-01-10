<?php

/*
3. Patobulinkite funkciją (2). Funkcija turėtų galėti patikrinti ir tokius telefono numerius:
"+370 623 45678"
"+370-623-45678"
"+370-623 45678"
"00370 623 45678"
Jeigu telefono numeris validus, iš funkcijos turėtų grįžti tvarkingai suformatuotas telefono numeris:
"+370-623 45678" --> "+37062345678"
*/

function task3(string $mobile): string
{
    $pattern = '/^(\+|0{2})(370)( |\-)(6)(\d{2})( |\-)(\d{5})$/';
    $replacement = '+$2$4$5$7';
    $result = preg_match($pattern, $mobile);
    if ($result !== 0) {
        return preg_replace($pattern, $replacement, $mobile);
    }
    return $mobile;
}
var_dump(task3('+370-623-45678'));