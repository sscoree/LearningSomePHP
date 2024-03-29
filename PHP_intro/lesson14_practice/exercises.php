<?php
/*
1. Išspausdinkite kas antrą skaičių nuo 100 iki 500 naudodamiesi for ciklu.
   Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
   100
   102
   103
   ...

2. Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 555 ir grąžinkite tą reikšmę iš funkcijos.

       $numbers = [
           [0, 1],
           [1, 0, 2],
           [
               0,
               [
                   0, 1, 99,
                   [
                      10, 44, 555,
                   ],
               ],
           ],
       ];

3.     Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 55. Jeigu paduotas skaičius mažesnis nei 0,
       funkcija paverčia šį skaičių pliusiniu.
       Funkcijos kvietimas: exercise10(60)


4.   Išveskite žodžių statistiką.
         Funkcija kviečiama:
         exercise2(['hello', 'you'])
         Funkcijos outputas:
         [
             'hello' => [
                 'vowels' => 2,
                 'consonants' => 3,
                 'length' => 5,
                 'starts_with' => h,
                 'ends_with' => o,
             ],
             'you' => [
                 'vowels' => 3,
                 'consonants' => 0,
                 'length' => 3,
                 'starts_with' => y,
                 'ends_with' => u,
             ]
         ]


Sis array bus naudojamas 5 ir 6 uzduociai :

[
        'products' => [
            'Comfy chair' => 'no data',
            'Yellow lamp' => [
                'price' => 15.3,
                'quantity' => 2,
            ],
            'Didzioji sofa' => [
                'pavadinimas' => 'Didzioji sofa',
                'kaina' => 'trylika eurų'
            ],
            'Softest rug' => [
                'price' => 27.3,
                'quantity' => 3,
                'discount' => 13,
            ],
            'Blue shelf' => [],
        ],
        'cartDiscounts' => [5, 16, 15],
    ];


5. Atspausdinkite statistika - pavadinima, kokia kaina ir koks likutis.
    Pvz:. Pavadinimas - Sofa, Kaina - 15.6, Likutis - 2

6. Parašykite funkciją kuri priimti prekės pavadinimą ir kokį kiekį norima nusipirkti, jeigu kiekio užtenka mūsų sandelyje (masyve)
    tuomet atspausdinama - Jums parduota tokio pavadinimo - PREKES_PAVADINIMAS, prekė, kuri kainuoja - 55.55
    Kitu atveju turi buti spausdinama - atsiprasau, bet tokio likucio sandelyje nebeturime.
 */