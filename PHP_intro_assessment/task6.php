<?php

/*
6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją juos priimtų ir juos sudaugintų tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia, kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)
 */

$num1 = readline('Please enter your first number: ');
$num2 = readline('Please enter your second number: ');
if (is_numeric($num1) && is_numeric($num2)) {
    $result = pow(($num1 * $num2), 2);
    echo $num1. ' multiplied by '. $num2. ' and raised by 2 equals '. $result;
}   else {
    echo 'The input you have entered must be a number, please try again';
}