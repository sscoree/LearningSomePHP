<?php
declare(strict_types=1);

/*
1. Apskaičiuokite PHP pagalba ir išveskite į terminalą. Kiekvienas rezultatas turi būti naujoje eilutėje:
987 + 545 - 32 * 94
32 pakelkite laipsniu 3 ir pridėkite 18
120 padalinkite iš 4 ir dar karta padalinkite iš 3
kokia liekana lieka po skaičiaus 187 dalybos iš 5
skaičiui 3 tris kartus pritaikykite increment operatorių - koki skaičių gaunate?
skaičiui 12 keturis kartus pritaikykite decrement operatorių - koki skaičių gaunate?
*/
echo "Task 1";
echo PHP_EOL;

$calc1 = 987 + 545 - 32 * 94;
print_r($calc1);
echo PHP_EOL;

$calc2 = 32 ** 3 + 18;
print_r($calc2);
echo PHP_EOL;

$calc3 = 120 / 4 / 3;
print_r($calc3);
echo PHP_EOL;

$calc4 = 187 % 5;
print_r($calc4);
echo PHP_EOL;

$calc5 = 3;
$calc5++;
$calc5++;
$calc5++;
print_r($calc5);
echo PHP_EOL;

$calc6 = 12;
$calc6--;
$calc6--;
$calc6--;
$calc6--;
print_r($calc6);
echo PHP_EOL;


/*
2. Išspausdinkite skaičius nuo 1 iki 10 naudodamiesi ciklu. Panaudokite visus 4 būdus ciklams aprašyti.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
1
2
3
...
*/
echo "Task 2";
echo PHP_EOL;

$i = 1;
while ($i <= 10) {
    echo $i;
    echo PHP_EOL;
    $i++;
}
echo PHP_EOL;
$a = 1;
do {
    echo $a;
    echo PHP_EOL;
    $a++;
} while ($a <= 10);
echo PHP_EOL;
for ($s = 1; $s <= 10; $s++) {
    echo $s . PHP_EOL;
}

/*
3. Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/
echo "Task 3";
echo PHP_EOL;

for ($d = 15; $d >= 3; $d--) {
    echo $d . PHP_EOL;
}

/*
4. Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
1
3
5
...
*/
echo "Task 4";
echo PHP_EOL;

for ($f = 1; $f <= 20; $f += 2) {
    echo $f . PHP_EOL;
}
/*
5. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/
echo "Task 5";
echo PHP_EOL;

for ($g = 1; $g <= 20; $g++) {
    if ($g % 3 !== 0) {
        continue;
    }
    echo $g . PHP_EOL;
}
/*
6. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3 arba iš 5.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/
echo "Task 6";
echo PHP_EOL;

for ($h = 1; $h <= 20; $h++) {
    if ($h % 3 === 0 || $h % 5 === 0) {
        echo $h . PHP_EOL;
    }
}
/*
7. Iteruokite per skaičius, nuo 1 iki 20.
Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
Kitu atveju išspausdinkite skaičių.
Viskas turi būti atspausdinti vienoje eilutėje su tarpais:
1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho
*/
echo "Task 7";
echo PHP_EOL;

for ($i = 1; $i <= 20; $i++){
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "HeyHo ";
    } elseif ($i % 5 === 0) {
        echo "Ho ";
    } elseif ($i % 3 === 0) {
        echo "Hey ";
    } else {
        echo $i.' ';
    }
}
echo PHP_EOL;
/*
8. Raskite sveikų skaičių nuo 1 iki 100 sumą.
*/
echo "Task 8";
echo PHP_EOL;

$sum = 0;
for ($h = 1; $h <= 100; $h++) {
    $sum += $h;
}
echo $sum;
echo PHP_EOL;
/*
9. Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
monday-tuesday-wednesday-thursday-friday-saturday-sunday-
*/

$days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday',];

echo "Task 9";
echo PHP_EOL;

foreach ($days as $day) {
    echo $day . '-';
}
echo PHP_EOL;
/*
10. Iteruokite sveikus skaičius nuo -5 iki 5.
Išspausdinkite skaičių dvejopai:
1. Pasinaudojant paprastu echo
2. Pasinaudojant funkcija var_dump ir prieš tai pavertus į 'bool' tipo reikšmę
-5
bool(true)
-4
bool(true)
...
HINT: atkreipkite dėmesį į ką pavirsta skaičius 0
*/
echo "Task 10";
echo PHP_EOL;
for ($l = -5; $l <= 5; $l++) {
    echo $l . PHP_EOL;
    var_dump((bool)$l);
}