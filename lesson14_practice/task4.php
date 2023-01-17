<?php

/*
    Išveskite žodžių statistiką.
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
 */

function word_statistics(array $input): array
{
    $output = [];
    foreach ($input as $word){
        $output[$word] = [
            'vowels' => preg_match_all('/[aeiou]/i', $word),
            'consonants' => preg_match_all('/[bcdfghjklmnpqrstvxz]/i', $word),
            'length' => strlen($word),
            'starts_with' => substr($word, 0, 1),
            'ends_with' => substr($word, -1)
        ];
    }
    return $output;
}

var_dump(word_statistics(['hello', 'you']));