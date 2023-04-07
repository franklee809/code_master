<?php

declare(strict_types = 1);

use App\ClassA;
use App\ClassB;

require __DIR__ . '/../../vendor/autoload.php';

$classA        = ClassA::make();
$classB        = ClassB::make();

dump($classA);
dd($classB);
