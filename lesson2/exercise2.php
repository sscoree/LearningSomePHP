<?php

// 1. Sukurkite konstantą WEBSITE_ADDRESS, reikšmėje nurodykite google.com adresą
echo "Task 1";
echo PHP_EOL;
define('WEBSITE_ADDRESS', 'google.com');
var_dump(WEBSITE_ADDRESS);

// 2. Palyginkite reikšmes 200 ir '200' taip, kad:
//   a) gautume true
//   b) gautume false
echo "Task 2";
echo PHP_EOL;
var_dump(200 == '200');
var_dump(200 === '200');

// 3. Patikrinkite ar galime sujungti du skaičius kaip string duomenis (string sujungimui naudojame taško simbolį)
echo "Task 3";
echo PHP_EOL;
$a = 1;
$b = 2;

var_dump($a . $b);
