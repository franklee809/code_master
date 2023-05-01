<?php

namespace App\ErrorHandling;

use Exception;

class MissingBillingInfoException extends Exception
{
    protected $message = 'Missing Billing information';

    public function __construct(string $message = '', int $code = 0, ?Throwable $previous = null)
    {
    }
}
