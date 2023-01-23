<?php

require ('1_rectangle.php');
require ('2_number_calculator.php');

/* Task 1 */
echo "Task 1: " .PHP_EOL;
$firstRectangle = new Rectangle(2, 3);

var_dump($firstRectangle->calculateArea());
var_dump($firstRectangle->calculateDiagonal());
var_dump($firstRectangle->calculatePerimeter());

/* Task 2 */
echo "Task 2: " .PHP_EOL;

$calculation = new NumberCalculator();
$calculation->addNumber(5);
$calculation->addNumber(7);
$calculation->addNumber(7);
echo $calculation->calculateSum().PHP_EOL;
echo $calculation->calculateProduct().PHP_EOL;
echo $calculation->calculateAverage().PHP_EOL;