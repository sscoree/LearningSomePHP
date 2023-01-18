<?php
/*
2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)
   $numbers = [
       [1, 3, 5],
       [55, 87, 100],
       [12],
       [],
   ];
 */
$numbers = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];
function arrayMultiplication(array $array): int
{
    $multi = 1;
    foreach ($array as $item){
        foreach ($item as $value){
            if (isset($value)){
                $multi *= $value;
            }
        }
    }
    return $multi;
}
print_r(arrayMultiplication($numbers));