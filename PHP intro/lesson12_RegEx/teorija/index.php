<?php

$pattern = '/(PN#)(\d+)/';
$input = 'PN#1234.d';
//$correctOrderNumber = 'PN#123';
//$matches = [];

//$result = preg_match($pattern, $correctOrderNumber, $matches);
$result = preg_replace($pattern, '$1---', $input);
var_dump($result);