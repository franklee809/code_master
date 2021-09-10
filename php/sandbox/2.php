<?php

use Carbon\Carbon;

require 'php/vendor/autoload.php';

$arr = array_fill(0, 90000000, 'foo');

$before = Carbon::now();

$count = count($arr);
for ($i = 0; $i < $count; $i++) {
    $arr[$i] = 'bar';
}

$after = Carbon::now();

dd($after->diffInSeconds($before));
