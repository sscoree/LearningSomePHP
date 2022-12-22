<?php

declare(strict_types=1);
echo "Task: 1";
echo PHP_EOL;

$someProducts = [
    '000_product_1  ',
    ' 000_product_2',
    '000_product_3  ',
    '000_product_4',
    '  000_product_5 ',
    '000_product_20
    ',
];

function exercise1(array $products)
{
    /*
    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
    Naudokite $someProducts masyvą.
    */
    $count_line = 0;
    foreach ($products as $product) {
        $count_line += strlen(trim($product));
    }
    return $count_line;
}
var_dump(exercise1($someProducts));

echo "Task: 2";
echo PHP_EOL;
function exercise2(): array
{
    /*
    Išskaidykite $longLine kintamajį į atskirus žodžius. Žodžiai turi grįžti iš funkcijos masyvo formoje.
    Skaidykite per underscore (_)
    */
    $longLine = 'Hello_how_are_you_doing?';
    return explode('_', $longLine);
}
var_dump(exercise2());

echo "Task: 3";
echo PHP_EOL;
function exercise3(): array
{
    /*
    Grąžinkite masyvą, kuris talpintų tik tuos žodžius, kurie panašūs į emailų adresus
    t.y. turi savyje simbolį @
    */
    $emails = [
        'some@email.com',
        'someAemail.com',
        'another@gmail.com',
        'notAreal.email.com',
        'real@gmail.com',
    ];

    $newEmails = [];
    foreach ($emails as $email) {
        if (str_contains($email, '@')) {
            $newEmails[] = $email;
        }
    }
    return $newEmails;
}
var_dump(exercise3());

echo "Task: 5";
echo PHP_EOL;
function exercise5(): array
{
    /*
    Kiekvienam žodžiui apskaičiuokite balsių skaičių (a, e, i, o, u)
    Funkcijos kvietimas: exercise4()
    Funkcija grąžina: [2, 3, 3, 1, 2]
    */
    $words = [
        'tennis',
        'rooftops',
        'hillside',
        'warm',
        'friends',
    ];
    $letter_array = ['a', 'e', 'i', 'o', 'u'];
    $result = [];
    foreach ($words as $i => $word) {
        $result[$i] = 0;
        $word_char = str_split($word);
        foreach ($word_char as $char){
            if(in_array($char, $letter_array)){
                $result[$i] += 1;
            }
        }
    }
    return $result;
}
var_dump(exercise5());

echo "Task: 6";
echo PHP_EOL;
function exercise6(array $products): int
{
    /*
    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
    Naudokite $someProducts masyvą.
    */

    return 0;
}

echo "Task: 7";
echo PHP_EOL;
function exercise7(): int
{
    $text = 'The African philosophy of Ubuntu has its roots in the Nguni word for being human.
    The concept emphasises the significance of our community and shared humanity and teaches
    us that "A person is a person through others". Many view the philosphy as a counterweight
    to the culture of individualism in our contemporary world.';

    /*
    Suskaičiuokite kiek balsių yra tekste
    */

    $letter_array = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    $splitted = str_split($text);
    foreach ($splitted as $i=>$letter){
            if (in_array($letter, $letter_array)){
                $count += 1;
        }
    }
    return $count;
}
var_dump(exercise7());