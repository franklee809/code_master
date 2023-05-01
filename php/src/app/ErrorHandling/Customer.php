<?php

namespace App\ErrorHandling;

class Customer
{
    public function __construct(public string $name)
    {
    }

    public function getBillingInfo()
    {
        return null;
    }
}
