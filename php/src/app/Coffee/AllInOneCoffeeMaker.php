<?php

namespace App\Coffee;

class AllInOneCoffeeMaker extends BaseCoffeeMaker
{
    use LatteTrait;
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public;
    }

    public function foo()
    {
        $this->makeCappuccino();
    }

    // protected string $milkType = 'skim-milk';
}
