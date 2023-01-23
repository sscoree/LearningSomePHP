<?php

/*
5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)
 */

function fileRead($pathToFile)
{
    $file = file_get_contents($pathToFile);
    return json_decode($file, true);
}
print_r(fileRead("./routes.json"));