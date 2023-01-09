<?php

require 'php/vendor/autoload.php';

// Arithmetic Operators ( + - * / % **)

// Assignment Operators (= += -= *= /* %= **=)

$x = 10;
$y = 0;

// dd(fdiv($x, $y)); // for php 8 and above // ignore Division by zero error
// dd($x / $y);

$array1 = $array2 = [];
// dd($array1, $array2);


$x = 6; // 110
$y = 3; // 011

// result  010

// dd($x & $y);

$x = ['a', 'b', 'c'];
$y = ['e', 'f', 'g', 'h'];
$z = $x + $y;
dd($z);