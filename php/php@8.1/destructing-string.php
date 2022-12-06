<?php

declare(strict_types = 1);

$array1 = ['a' => 1, 2, 3];
$array2 = ['c' => 4, 5, 6];

$array3 = [...$array1, $array2];

var_dump($array3);
