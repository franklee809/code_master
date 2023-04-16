<?php

namespace App\Coffee;

class BaseCoffeeMaker
{
    public function makeCoffee()
    {
        dump(static::class . ' is making coffee');
    }
}
