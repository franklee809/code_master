<?php

declare(strict_types = 1);

require 'php/vendor/autoload.php';

function foo(int|float $x, int|float $y, int|float ...$numbers)
{
    return $x + $y + array_sum($numbers);
}

$total = [1, 2, 23, 3, 4];
dd(foo(...$total, x: 10.0, y: 20));
