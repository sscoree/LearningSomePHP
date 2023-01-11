<?php

/*
5. Parašykite funkciją, kuri pravaliduotų IPv4 adresą. IPv4 adresas yra sudarytas iš 4 skaičių, kurių kiekvienas gali
būti nuo 0 iki 255. Skaičiai atskirti taškais.
Pvz.:
255.255.255.255
1.1.0.1
*/

function validateIpv4(string $input): bool
{
    $matches = [];
    preg_match('/^(\d{1,3}).(\d{1,3}).(\d{1,3}).(\d{1,3})$/', $input, $matches);
    $segments = array_slice($matches, 1);

    foreach ($segments as $segment) {
        if ((int)$segment > 255)
            return false;
    }

    return true;
}

var_dump(validateIpv4('255.255.255.255'));