<?php

declare(strict_types=1);

date_default_timezone_set('Europe/Vilnius');

echo "Task: 1";
echo PHP_EOL;

/*
1. Išspausdinkite šio momento datą pasinaudodami funkcija 'date'
*/
function exercise1(): string
{
    return date('Y-m-d H:i:s');
}
var_dump(exercise1());

echo "Task: 2";
echo PHP_EOL;
/*
2. Išspausdinkite datą '2008-12-15 15:15' pasinaudodami funkcija 'date'
*/
function exercise2(): string
{
    return date('Y-m-d H:i', 1229346900);
}
var_dump(exercise2());

echo "Task: 3";
echo PHP_EOL;
/*
3. Išspausdinkite šio momento datą skirtingais formatais, kurie atitiktų pavyzdžius:
- 1970 Mar 1 15:15:00
- 1970 Mar 01 15:15
- 1970 Mar 1st 11:15:00 PM
- 1970/3/1
- savaites numeris (52 savaitės metuose)
- dienos numeris (365 dienos metuose)
*/
function exercise3(): void
{
    echo regularExercises . phpdate('Y M j H:i:s', 0) . PHP_EOL;
    echo regularExercises . phpdate('Y M d H:i', 0) . PHP_EOL;
    echo regularExercises . phpdate('Y M jS h:i:s A', 3600 * 15) . PHP_EOL;
    echo regularExercises . phpdate('Y/n/j', 0) . PHP_EOL;
    echo regularExercises . phpdate('W', 0) . PHP_EOL;
    echo regularExercises . phpdate('z', 0) . PHP_EOL;
}
exercise3();


echo "Task: 4";
echo PHP_EOL;
/*
4. Sukurkite datos objektą iš šių tekstinių datų:
- 2000-03-02 15:30:00
- 2000/02/15 08:30:00 PM
- 2000 March 2nd 15:30:00
*/
function exercise4(): void
{
    var_dump(new DateTime('2000-03-02 15:30:00'));
    var_dump(new DateTime('2000/02/15 08:30:00 PM'));
    //var_dump(new DateTime('2000 March 2nd 15:30:00'));
}
exercise4();

echo "Task: 5";
echo PHP_EOL;
/*
5. Sukurkite datą iš '15th Jan 2021 8:15:01 PM' (data X). Pamodifikuokite, kad gautumėte:
- datą po 2 savaičių nuo datos X
- datą po 10 metų nuo datos X
- datą prieš 5 valandas nuo datos X
- paskutinę mėnesio dieną
- pirmą mėnesio dieną
- ateinantį antradienį
- datą prieš 1 dieną 8 valandas 15 minučių nuo datos X
*/

function exercise5(): void
{
    $dateX = '15th Jan 2021 8:15:01 PM';

    $date1 = new DateTime($dateX);
    var_dump($date1->modify('+2 weeks'));

    $date2 = new DateTime($dateX);
    var_dump($date2->modify('+10 years'));

    $date3 = new DateTime($dateX);
    var_dump($date3->modify('-5 hours'));

    $date4 = new DateTime($dateX);
    var_dump($date4->modify('last day of next month'));

    $date5 = new DateTime($dateX);
    var_dump($date5->modify('first day of this month'));

    $date6 = new DateTime($dateX);
    var_dump($date6->modify('Tuesday next week'));

    $date7 = new DateTime($dateX);
    var_dump($date7->modify('1 day ago, -8 hours, -15 minutes'));
}
exercise5();

echo "Task: 6";
echo PHP_EOL;
function exercise6(): void
{
    $products = [
        [
            'name' => 'Wine glass',
            'last_purchase' => '2021 Jan 15 18:34:12',
        ],
        [
            'name' => 'Bread knife',
            'last_purchase' => '2020 Mar 15 23:14:00',
        ],
        [
            'name' => 'Blue chair',
            'last_purchase' => '2019 Dec 02 15:00:12',
        ],
    ];

    /*
    Išspausdinkite produktų paskutinių pirkimų santrauką:
    Wine glass 2021-01-15 18:34:12
    ...
    */
    foreach ($products as $product){
        $date = date_create_from_format('Y M d H:i:s', $product['last_purchase']);
        echo $product['name'] . " " . $date->format('Y-m-d H:i:s').PHP_EOL;
    }
}
exercise6();
function exercise7($date1, $date2): string
{
    /*
    Palyginkite datas ir grąžinkite atsakymą, kuri data naujesnė.
    Funkcijos kvietimas: exercise7(date_create('2022-01-25 17:13:25'), date_create('2020-01-25 17:13:25'));
    Rezultatas:
    'First date is newer'
    Funkcijos kvietimas: exercise7(date_create('2020-01-25 17:13:25'), date_create('2022-01-25 17:13:25'));
    Rezultatas:
    'Second date is newer'
    */

    return '';
}

function exercise8($date): void
{
    /*
    Išspausdinkite paduotos datos skirtumą nuo dabartinio momento žodžiais.
    Funkcijos kvietimas: exercise8(date_create('2020-01-25 17:13:25'));
    Rezultatas:
    Supplied date was 891 days ago
    Funkcijos kvietimas: exercise8(date_create('2023-01-25 17:13:25'));
    Rezultatas:
    Supplied date is in the future
    */
}

function exercise9($date): void
{
    /*
    Išspausdinkite datų skirtumą žodžiais.
    Funkcijos kvietimas: exercise9(date_create('2020-01-25 17:13:25'));
    Rezultatas:
    Supplied date was 2 years 1 months 11 days
    Funkcijos kvietimas: exercise9(date_create('2023-01-25 17:13:25'));
    Rezultatas:
    Supplied date is in the future
    */
}