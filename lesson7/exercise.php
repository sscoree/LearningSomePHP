<?php

declare(strict_types=1);

function getCities(): array
{
    return [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        [
            'name' => 'Delhi',
            'population' => 29399141,
        ],
        [
            'name' => 'Shanghai',
            'population' => 26317104,
        ],
        [
            'name' => 'Sao Paulo',
            'population' => 21846507,
        ],
        [
            'name' => 'Mexico City',
            'population' => 21671908,
        ],
        [
            'name' => 'New York',
            'population' => 25000000,
        ],
    ];
}
echo "Task: 1 - ";
function exercise1(array $cities): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
    Miestus pasiimkite iškvietę funkciją 'getCities'
    */
    $popSum = 0;
    foreach ($cities as $city){
        $popSum = $popSum + $city['population'];
    }
    return $popSum;
}
var_dump(exercise1(getCities()));

echo "Task: 2 - ";
function exercise2(): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcijomis array_column ir array_sum
    ir grąžinkite ją iš funkcijos
    */
    return array_sum(array_column(getCities(), 'population'));
}
var_dump(exercise2());

echo "Task: 3 - ";
function exercise3(): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcija array_reduce ir grąžinkite ją iš funkcijos
    */
    $totalPopulation = array_reduce(
        getCities(),
        function (int $carry, array $city){
            return $carry + $city['population'];
        },
        0
    );
    return $totalPopulation;
}
var_dump(exercise3());

echo "Task: 4 - ";
function exercise4(): int
{
    /*
    Suskaičiuokite populiaciją miestų, kurie yra didesni nei 25,000,000 gyventojų.
    Rinkites sau patogiausią skaičiavimo būdą.
    */
    $popSum = 0;
    foreach (getCities() as $getCity){
        if($getCity['population'] > 25000000){
            $popSum = $popSum + $getCity['population'];
        }
    }
    return $popSum;
}
var_dump(exercise4());

echo "Task: 5 - ";
function exercise5(): array
{
    /*
    Grąžinkite masyvą, kuriame būtų tik tie miestai, kurie yra didesni nei 25,000,000 gyventojų
    Rezultatas turi būti tokios pat struktūros, kaip ir pradinis miestų masyvas:
    [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        ...
    ]
    */
    $getCities = getCities();
    foreach ($getCities as $key=>$getCity){
        if($getCity['population'] <= 25000000){
            unset($getCities[$key]);
        }
    }
    return $getCities;

}
var_dump(exercise5());
function exercise6(): int
{

    /*
    Suskaičiuokite ir grąžinkite bendrą užsakymo sumą.
    Prekėms, kurių pavadinimai nurodyti masyve $lowPriceItems, taikykite kainą 'priceLow'.
    Kitoms prekėms taikykite kainą 'priceRegular'.
    Bandykite panaudoti array_* funkcijas.
    */

    $lowPriceItems = ['t-shirt', 'shoes'];

    $orderItems = [
        [
            'name' => 't-shirt',
            'priceRegular' => 15,
            'priceLow' => 13,
            'quantity' => 3,
        ],
        [
            'name' => 'coat',
            'priceRegular' => 74,
            'priceLow' => 60,
            'quantity' => 6,
        ],
        [
            'name' => 'shirt',
            'priceRegular' => 25,
            'priceLow' => 20,
            'quantity' => 2,
        ],
        [
            'name' => 'shoes',
            'priceRegular' => 115,
            'priceLow' => 100,
            'quantity' => 1,
        ],
    ];


    return 0;
}