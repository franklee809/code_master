<?php

declare(strict_types = 1);

use App\Coffee\{AllInOneCoffeeMaker, BaseCoffeeMaker, CappuccinoMaker, LatteMaker};

require __DIR__ . '/../../../vendor/autoload.php';

$coffeeMaker   = new BaseCoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker   = new LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();

$cappuccinoMaker   = new CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();

$AllInOneCoffeeMaker   = new AllInOneCoffeeMaker();
$AllInOneCoffeeMaker->makeCoffee();
$AllInOneCoffeeMaker->makeCappuccino();
$AllInOneCoffeeMaker->makeLatte();
