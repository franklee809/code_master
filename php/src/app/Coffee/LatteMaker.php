<?php

namespace App\Coffee;

class LatteMaker extends BaseCoffeeMaker
{
    use LatteTrait;

    public function makeLatte()
    {
        dump('MAKING LATTE');
    }
}
