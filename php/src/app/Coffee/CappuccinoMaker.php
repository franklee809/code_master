<?php

namespace App\Coffee;

class CappuccinoMaker extends BaseCoffeeMaker
{
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public;
    }
}
