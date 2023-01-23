<?php
/*
Išspausdinkite skaičius, kurie yra mažesni nei
$number ir dalijasi iš 55. Jeigu paduotas skaičius mažesnis nei 0,
funkcija paverčia šį skaičių pliusiniu.
Funkcijos kvietimas: exercise10(60)
 */

function task3(int $number): void
{
    $number = abs($number);
    for ($i = $number - 1; $i >= 55; $i--){
        if ($i % 55 === 0){
            echo $i.PHP_EOL;
        }
    }
}
task3(551);