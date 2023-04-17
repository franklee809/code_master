<?php

namespace App;

class Invoice
{

    public function __construct(public Customer $customer, public float $amount, private int $id) {
    }
    public function __debugInfo()
    {
        return [1];
    }
}
