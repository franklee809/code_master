<?php

require 'php/vendor/autoload.php';

/* Variable, anonymous function and arrow function */

// normal function
// function sum(int|float ...$numbers): int|float
// {
//     return array_sum($numbers);
// }

// // anonymous function
// $sum = function (callable $callback, int|float ...$numbers): int|float {
//     return $callback(array_sum($numbers));
// };

// function foo($element)
// {
//     return $element * 2;
// }

// dd($sum('foo', 1, 2, 3, 4));

// arrow function

$a = [1, 2, 3, 4];

$b = array_map(function ($value) {return $value * $value; }, $a);
$c = array_map(fn($value) => $value * $value , $a);

dump($b);
dd($c);
