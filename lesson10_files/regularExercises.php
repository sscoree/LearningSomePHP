<?php

function exercise1(): void
{
    /*
    Įrašykite skaičius nuo 0 iki 10 į failą pavadinimu numbers.txt.
    Kiekvienas skaičius turi būti įrašytas naujoje eilutėje.
    */

    $file = "lesson10_files/task1.txt";
    for ($i = 0; $i <= 10; $i++){
        file_put_contents($file, $i.PHP_EOL, FILE_APPEND);
    }
}
exercise1();

function exercise2(): void
{
    /*
    Įrašykite visus transporto priemonių pavadinimus į failą vehicles.txt.
    Kiekvienas pavadinimas turi būti įrašytas naujoje eilutėje.
    */

    $vehicles = [
        [
            'type' => 'passenger car',
            'name' => 'Honda Civic',
            'weight' => 1550
        ],
        [
            'type' => 'airplane',
            'name' => 'Boeing 737',
            'weight' => 41410
        ],
        [
            'type' => 'airplane',
            'name' => 'Cessna DC-6',
            'weight' => 1300
        ],
        [
            'type' => 'truck',
            'name' => 'Volvo FH16',
            'weight' => 12500
        ],
        [
            'type' => 'truck',
            'name' => 'MB Actros',
            'weight' => 13000
        ],
        [
            'type' => 'passenger car',
            'name' => 'VW Golf',
            'weight' => 1450
        ],
    ];

    $file = "lesson10_files/task2.txt";
    foreach ($vehicles as $vehicle){
        file_put_contents($file, $vehicle['name'].PHP_EOL, FILE_APPEND);
    }
}
exercise2();

function exercise3(): array
{
    /*
    Perskaitykite visus tr. priemonių pavadinimus iš failo vehicles.txt,
    sudėkite juos į masyva ir grąžinkite iš funkcijos.
    [
        'Honda Civic',
        'Boeing 737',
        ...
    ]
    */

    $file = "lesson10_files/task2.txt";
    return explode(PHP_EOL, file_get_contents($file));
}
print_r(exercise3());


/*
    Užduotis: 4
    Sukurkite naują failą days_until_calculator.php.
    Jį paleidus iš vartotojo turėtų nuskaityti 2 argumentus, vieną po kito:
    php -f days_until_calculator.php
    Event name:
    Event date (YYYY-MM-DD):
    Pavyzdys:
    php -f days_until_calculator.php
    Event name: birthday
    Event date (YYYY-MM-DD): 2022-06-15
    Event 'birthday' is 97 days away
*/
//  ---------> padaryta kitame faile <----------

function exercise5(): void
{
    /*
    Įrašykite visą $vehicles masyvą į failą vehicles_database.json JSON formatu.
    */

    $vehicles = [
        [
            'type' => 'passenger car',
            'name' => 'Honda Civic',
            'weight' => 1550
        ],
        [
            'type' => 'airplane',
            'name' => 'Boeing 737',
            'weight' => 41410
        ],
        [
            'type' => 'airplane',
            'name' => 'Cessna DC-6',
            'weight' => 1300
        ],
        [
            'type' => 'truck',
            'name' => 'Volvo FH16',
            'weight' => 12500
        ],
        [
            'type' => 'truck',
            'name' => 'MB Actros',
            'weight' => 13000
        ],
        [
            'type' => 'passenger car',
            'name' => 'VW Golf',
            'weight' => 1450
        ],
    ];

    $serializedData = json_encode($vehicles, JSON_PRETTY_PRINT);
    file_put_contents('lesson10_files/vehicles_database.json', $serializedData);
}
exercise5();
function exercise6(): array
{
    /*
    Perskaitykite failo vehicles_database.json turinį, paverskite jį į masyvą ir grąžinkite iš funkcijos.
    */
    $data = file_get_contents('lesson10_files/vehicles_database.json');
    return json_decode($data, true);
}
var_dump(exercise6());

function exercise7(): void
{
    $newVehicle = [
        'type' => 'plane',
        'name' => 'Airbus A320',
        'weight' => 39500,
    ];

    /*
    Papildykite vehicles_database.json esantį masyvą nauja tr. priemone.
    Žingsniai:
    - perskaitykite failo vehicles_database.json turinį
    - paverskite turinį į masyvą
    - į masyvą pridėkite naują elementą ($newVehicle)
    - vėl išsaugokite visą masyvą faile vehicles_database.json
    */

    $data = file_get_contents('lesson10_files/vehicles_database.json');
    $data = json_decode($data, true);
    $data[] = $newVehicle;
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('lesson10_files/vehicles_database.json', $data);
}
exercise7();