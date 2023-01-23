<?php
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
echo "Please enter ";
$eventName = readline("event name: ");
$eventDate = readline("event date (YYYY-MM-DD): ");

$eventDate = new DateTime($eventDate);
$now = new DateTime();
$interval = $eventDate->diff($now);

echo "Event - " .$eventName . " is " . $interval->format('%a days away');