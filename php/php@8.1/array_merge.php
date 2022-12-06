<?php

require 'php/vendor/autoload.php';

$a = ['name' => 'fruit', 'age' => 31];
$b = ['weight' => 80];

$c = [...$a, ...$b];

dd($c);
