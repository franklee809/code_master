<?php

require('php/vendor/autoload.php');


// array chunk

// $array = [1,2,34,4,5,6,7];
// dd(array_chunk($array, 3));


// array combine

// $array1 = ['a', 'b', 'c'];
// $array2 = ['A', 'B', 'C'];

// dd(array_combine($array1, $array2));

// array filter

// $array = [0,1,2,3,4,5,6,7,8,9,10];

// $even = array_filter($array, fn($value) => $value % 2 === 0, ARRAY_FILTER_USE_KEY);

// dd($even);

// array keys

// $array = [ 'a' => 1, 'b' => 2, 'c' => 3];

// dump(array_keys($array, 3, true));


// array diff

// $array1 = [ 'a' => 1, 'b' => 2, 'c' => 3];
// $array2 = [ 'd' => 2, 'e' => 3];
// $array3 = [ 'f' => 2, 'g' => 3];

// dump(array_diff($array1, $array2, $array3));
// dump(array_diff_assoc($array1, $array2, $array3));
// dump(array_diff_key($array1, $array2, $array3));

// array sort
$array1 = [ 'd' => 4, 'a' => 5, 'b' => 2, 'c' => 3];
asort($array1);
dump(($array1));

ksort($array1);
dump(($array1));
