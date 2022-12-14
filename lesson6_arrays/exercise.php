<?php

declare(strict_types=1);

echo "Task: 1 - ";
function exercise1(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [0, 1, 2, 3, 4];

    return $numbers[3];
}
var_dump(exercise1());

echo "Task: 2 - ";
function exercise2(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];

    return $numbers['three'];
}

var_dump(exercise2());

echo "Task: 3 - ";
function exercise3(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        [0, 1],
        [1, 0, 2],
        [
            0,
            [
                0, 1, 99
            ],
        ],
    ];

    return $numbers[2][1][2];
}
var_dump(exercise3());

echo "Task: 4 - ";
function exercise4(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_2' => [
                'zero' => 0, 'one' => 1, 'ninetynine' => 99
            ],
        ],
    ];

    return $numbers['fourth']['value_2']['ninetynine'];
}
var_dump(exercise4());

echo "Task: 5 - ";
function exercise5(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                'zero' => 0, 'one' => 1, 99
            ],
        ],
    ];

    return $numbers['fourth']['value_6'][0];
}
var_dump(exercise5());

echo "Task: 6 - ";
function exercise6(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                5 => 0, 'one' => 1, 99
            ],
        ],
    ];

    return $numbers['fourth']['value_6'][6];
}
var_dump(exercise6());

echo "Task: 7 - ";
function exercise7(): array
{
    /*
    Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]
    */

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
    unset($numbers['two']);
    return $numbers;
}
var_dump(exercise7());

echo "Task: 8 - ";
function exercise8(): array
{
    /*
    Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'five' => 5]
    */

    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
    foreach ($numbers as $key => $number) {
        if ($number % 2 === 0) {
            unset($numbers[$key]);
        }
    }
    return $numbers;
}
var_dump(exercise8());

echo "Task: 9 - ";
function exercise9(int $start, int $end): void
{
    /*
    Išspausdinkite skaičius nuo $start iki $end pasinaudodami ciklu.
    Jeigu $start yra mažiau nei $end, funkcija nieko nespausdina.
    */
    for ($i = $start; $i >= $end; $i--) {
        if (!$start < $end) {
            echo $i. " ";
        }
        else {
            echo "";
        }
    }
}
exercise9(7, 2);
echo PHP_EOL;

echo "Task: 10 - ";
function exercise10(int $number): void
{
    /*
    Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 3. Jeigu paduotas skaičius mažesnis nei 0,
    funkcija nieko nespausdina.
    Funkcijos kvietimas: exercise10(60)
    Funkcija spausdina:
    3
    6
    9
    12
    ...
    60
    */
    for ($i = 0; $i < $number; $i++) {
        if ($number !== 0 && $i % 3 == 0) {
            echo $i . PHP_EOL;
        }
        else {
            echo "";
        }
    }
}
exercise10(60);
echo PHP_EOL;

echo "Task: 11 - ";
function exercise11(int $number): void
{
    /*
    Išspausdinkite skaičius nuo $number iki 0 pasinaudodami ciklu. Jeigu paduotas skaičius neigiamas,
    funkcija nieko nespausdina.
    Funkcijos kvietimas: exercise11(21)
    Funkcija spausdina:
    21
    20
    19
    ...
    1
    0
    */
    for ($i = $number; $i >= 0; $i--) {
        if ($number < 0) {
            echo " ";
        }
        else {
            echo $i . PHP_EOL;
        }
    }
}
exercise11(21);
function getNumbers(): array
{
    return [
        99,
        15,
        28,
        13,
        145,
        99,
        12,
        -57,
        -36,
    ];
}
/*
Kiekviena užduoties dalis turi būti funkcija. Tęskite funkcijų numeraciją: exercise12, exercise13 ir t.t.
Masyvą gausite iškvietę funkciją 'getNumbers'
12. Raskite ir grąžinkite visų masyvo narių sumą
13. Raskite ir grąžinkite lyginių masyvo narių sumą
14. Raskite ir grąžinkite teigiamų masyvo narių sumą
15. Raskite ir grąžinkite sandaugą tų masyvo narių, kurie dalijasi iš 5
16. Raskite ir grąžinkite masyvo narių vidurkį. Neigiamus skaičius paverskite į teigiamus
17. Į masyvą pridėkite naują narį - skaičiu 255 - ir išspausdinkite masyva pasinaudodami funkcija 'printr'
*/
echo "Task: 12 - ";

function exercise12(): void
{
    print_r(array_sum(getNumbers()));
}
exercise12();
echo PHP_EOL;

echo "Task: 13 - ";
function exercise13(): void
{
    $sum = 0;
    foreach (getNumbers() as $value) {
        if ($value % 2 === 0){
            $sum += $value;
        }
    }
    echo $sum;
}
exercise13();
echo PHP_EOL;

echo "Task: 14 - ";
function exercise14(): void
{
    $sum = 0;
    foreach (getNumbers() as $value) {
        if ($value > 0){
            $sum = $sum + $value;
        }
    }
    echo $sum;
}
exercise14();
echo PHP_EOL;

echo "Task: 15 - ";
function exercise15(): void
{
    $sum = 1;
    foreach (getNumbers() as $value) {
        if ($value % 5 === 0){
            $sum = $sum * $value;
        }
    }
    echo $sum;
}
exercise15();
echo PHP_EOL;

echo "Task: 16 - ";
function exercise16(): void
{
    $sum = 0;
    foreach (getNumbers() as $value) {
        if ($value < 0) {
            $sum = $sum + ($value * -1);
        }
        else {
            $sum = $sum + $value;
        }
    }
    echo $sum / count(getNumbers());
}
exercise16();
echo PHP_EOL;


echo "Task: 17 - ";
function exercise17(): void
{
    $a = getNumbers();
    $a[] = 255;
    print_r($a);
}
exercise17();
echo PHP_EOL;