<?php

require ('1_rectangle.php');

/* Task 1 */

$firstRectangle = new Rectangle(2, 3);

var_dump($firstRectangle->calculateArea());
var_dump($firstRectangle->calculateDiagonal());
var_dump($firstRectangle->calculatePerimeter());


