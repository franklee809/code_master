<?php

// class and objects


class Transaction
{
    private ?Customer $customer = null;

    public function __construct(private float $amount, private string $description) {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate): self
    {
        $this->amount += $rate / 100;

        return $this;
    }

    public function applyDiscount(float $rate): self
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function __destruct()
    {
        dump('DESTRUCTING');
    }
}
