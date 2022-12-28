<?php

$x = 130_00.5e3;
echo $x . PHP_EOL;

// PHP constant
echo PHP_FLOAT_MAX . PHP_EOL;
echo PHP_FLOAT_MIN . PHP_EOL;

// unexpected error
$float = ceil((int)((0.4 + 0.5) * 10));
// echo $float;

// float type casting
$string = '12.12,xca12.12';
echo (float) $string;
