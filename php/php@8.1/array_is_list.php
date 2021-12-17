<?php

$list = [1,2,3];
$not_list = [1 => 'a',2,3];

var_dump(array_is_list($list));
var_dump(array_is_list($not_list));

$list = array_filter($not_list, fn($value) => $value != 'a');

var_dump($list);
var_dump(array_is_list($list));