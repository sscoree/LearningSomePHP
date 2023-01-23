<?php
declare(strict_types=1);

echo 'Hello';
echo PHP_EOL;
require "file_to_load.php";
die();
echo 'You should not be seeing this line printed';