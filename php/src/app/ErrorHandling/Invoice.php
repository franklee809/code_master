<?php

namespace App\ErrorHandling;

use Exception;
use InvalidArgumentException;
use LogicException;

class Invoice
{
    public function __construct(public Customer $customer)
    {
    }

    public function process(float $amount): void
    {
        if ($amount < 0) {
            // throw new InvalidArgumentException('Less amount');
            throw InvoiceException::invalidAmount();
        }

        if (empty($this->customer->getBillingInfo())) {
            // throw new MissingBillingInfoException();
            throw InvoiceException::missingBillingInfo();
        }

        dump('Processing ' . $amount . ' invoice - ');

        sleep(1);

        dump('ok');
    }
}
