<?php

declare(strict_types = 1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

const FOO = 1;

class Transaction
{
    private string $status;
    private static int $count = 0;
    private float $amount      = 0;

    public function __construct(float $amount)
    {
        self::$count++;
        $this->amount  = $amount;
        $this->setStatus(Status::PENDING);
    }

    public function setStatus(string $status): self
    {
        if (!isset(Status::ALL_STATUSES[$status])) {
            throw new \Exception('wrong status code');
        }
        $this->status  = $status;

        return $this;
    }

    public static function getCount()
    {
        return self::$count;
    }

    public function process()
    {
        $result = array_map(static function ($value) { // TODO: use static callback or closure to remove the $this instance
            return $value . '123';
        }, [1, 2, 3]);
        dump($result);

        return 'Processing order transaction';
    }
}
