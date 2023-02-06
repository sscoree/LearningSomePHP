<?php

require './vendor/autoload.php';

use Carbon\CarbonImmutable;

$immutable = CarbonImmutable::now();
$immutable = $immutable->add(1, 'day');

var_dump($immutable->toRfc7231String());