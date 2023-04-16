<?php

namespace App\Coffee;

trait LatteTrait
{
    private string $milkType = 'whole-milk';
    public static string $foo;

    final public function makeLatte()
    {
        dump(static::class . ' is making ' . $this->milkType . ' latte');
    }

    // abstract public function getMilkType(): string;

    public function setMilkType($type)
    {
        $this->milkType = $type;

        return $this;
    }
}
