<?php

declare(strict_types = 1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

const FOO = 1;

class Transaction
{
    private string $status;

    public function __construct()
    {
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
}
