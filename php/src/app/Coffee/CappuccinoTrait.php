<?php

namespace App\Coffee;

trait CappuccinoTrait
{
    private function makeCappuccino()
    {
        dump(static::class . ' is making cappuccino');
    }

    public function makeCoffee()
    {
        dump('Making coffee (UPDATED)');
    }

    // public function makeLatte()
    // {
    //     dump(static::class . ' makeSpecialLatte');
    // }
}
