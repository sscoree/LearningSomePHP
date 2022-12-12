<?php
declare(strict_types=1);

/*
1. Pašalinkite/užkomentuokite praeitos užduoties eilutes, kad jos netrukdytų toliau tęsti darbo.
Išveskite į terminalą kintamojo $variableToDebug:
- tik reikšmę
- reikšmę kartu su duomens tipu
*/
$variableToDebug = 15;
echo $variableToDebug;
print_r($variableToDebug);
echo PHP_EOL;
/*
2. Sudėliokite masyvą ir jį atspausdinkite iš šių reikšmių:
- Hello
- Learning
- Amazing
- CodeAcademy
- Php
- Git
*/
var_dump(['Hello', 'Learning', 'Amazing', 'CodeAcademy', 'Php', 'Git']);
echo PHP_EOL;
/*
3. Pakeiskite duotų kintamųjų reikšmes į:
- int
- bool
*/

//pakeisti i int:
$variable1 = false;
$variable2 = true;
$variable3 = '2022 year';

var_dump((int) $variable1);
var_dump((int) $variable2);
var_dump((int) $variable3);
echo PHP_EOL;

//pakeisti i bool:
$variable4 = 150;
$variable5 = [];
$variable6 = 'Year - 2022';

var_dump((bool) $variable4);
var_dump((bool) $variable5);
var_dump((bool) $variable6);
echo PHP_EOL;

/*
4. Atlikite šiuo loginius operatorius su duotais kintamaisiais taip, kad gautumėt true ir false
- &&
- ||
*/

$variable7 = 145;
$variable8 = '145';
$variable9 = '150';
$variable10 = 150;

var_dump($variable7 && $variable8);
var_dump(!($variable9 || $variable10));

echo PHP_EOL;

/*
5. Atlikite siuos skaiciavimus, panaudodami kintamuosius
- 143 * 444
- 567 / 12
- 578 % 55
- 6 ** 5
- 5--;
- 6++;
*/

$first = 143 * 444;
$second = 567 / 12;
$third = 578 % 55;
$forth = 6 ** 5;
$fifth = 5;
$fifth--;
$sixth = 6;
$sixth++;



/*
6. Parasykite koda, kad jis patikrintu ar:
- 56 > 77
- 190 <= 230
- 230 yra lygu '230'
- 45 nera lygu '45
*/
echo "6 uzduotis".PHP_EOL;
var_dump(56 > 77);
echo PHP_EOL;
var_dump(190 <= 230);
echo PHP_EOL;
var_dump(230 === '230');
echo PHP_EOL;
var_dump(45 !== '45');


/*
7. Parasykite koda, kad jis ar reiksme egzistuoja
- pasirasykite kintamaji $variable = 10; patikrinkite ar jis egzistuoja;
- jeigu egzistuoja patikrinkite koks jo tipas
- istrinkite jo apsirasyma ir patikrinkite ar egzistuojate. kokia reiksme gaunate? ar gaunate error?
*/
echo "6 uzduotis".PHP_EOL;
$variable = 10;
var_dump(isset($variable));
var_dump($variable);