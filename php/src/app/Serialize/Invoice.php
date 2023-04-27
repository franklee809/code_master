<?php

namespace App\Serialize;

class Invoice
{
    private string $id;

    public function __construct(public float $amount, public string $description, public string $creditCardNo)
    {
        $this->id = uniqid('invoice_');
    }

    public static function create(): static
    {
        return new static(123.0, "test", "1423 2323 2323 2323");
    }

    // used before the serialization happens
    public function __sleep(): array
    {
        return ['id', 'amount'];
    }

    public function __wakeup()
    {
        // return [];
    }

    public function __serialize(): array
    {
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'description' => $this->description,
            'creditCardNo' => base64_encode($this->creditCardNo),
        ];
    }

    public function __unserialize($data): void
    {
        dd($data);
    }
}
