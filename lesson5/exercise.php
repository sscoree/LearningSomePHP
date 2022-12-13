<?php

// Visur sudėkite reikiamus parametrų bei return tipus

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/
echo "Task 1";
echo PHP_EOL;
function dividesBy5 (int $number): int
{
    return $number % 5;
}

echo dividesBy5(7);
echo PHP_EOL;
/*
2. Parašykite funkciją 'arrayPrinter', kuri priimtų array tipo parametrą ir
išspausdintų kiekvieną masyvo elementą naujoje eilutėje.
Funkcijos kvietimas: arrayPrinter(['some text', 'another text'])
Funkcija grąžina: funkcija nieko negrąžina - ji tik išspausdina masyvą į terminalą:
'some text'
'another text'
...
*/
echo "Task 2";
echo PHP_EOL;
function arrayPrinter (array $array): void
{
    foreach ($array as $value) {
        echo "'" . $value . "'";
        echo PHP_EOL;
    }
}
arrayPrinter(["some text", "another text"]);
echo PHP_EOL;

/*
3. Parašykite funkciją 'stringEnhancer', kuri grąžintų pakeistą tekstą.
Funkcijos kvietimas: stringEnhancer('some text', '##')
Funkcija grąžina: '##some text##'
Funkcijos kvietimas: stringEnhancer('some text')
Funkcija grąžina: '**some text**'
*/
echo "Task 3";
echo PHP_EOL;

function stringEnhancer(string $text, string $enhancer = '**'): string
{
    $text = $enhancer . $text . $enhancer;
    return $text;
}

var_dump(stringEnhancer('some text'));
var_dump(stringEnhancer('some text', '##'));
/*
4. Parašykite funkciją 'stringModifier', kuri pamodifikuotų paduotą string tipo kintamąjį.
Funkcijos kvietimas:
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'
Funkcija grąžina: funkcija nieko negrąžina
*/
echo "Task 4";
echo PHP_EOL;

function stringModifier(string &$text, string $enhancer): void
{
    $text = $enhancer . $text . $enhancer;
}
$x = 'some text';
stringModifier($x, '$$');
echo $x.PHP_EOL;
/*
5. Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą.
Funkcijos kvietimas:
textReplicator('some_text', 3);
Funkcija grąžina: 'some_text-some_text-some_text'
Funkcijos kvietimas:
textReplicator('some_text', null);
Funkcija grąžina: 'some_text'
*/
function textReplicator(string $text, ?int $num): string
{

}
/*
6. Paverskite funkciją 'textReplicator', į veikiančią anoniminę funkciją.
*/