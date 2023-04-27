<?php

declare(strict_types = 1);

use App\ErrorHandling\{Customer, Invoice, MissingBillingInfoException};

require __DIR__ . '/../../../vendor/autoload.php';

$invoice = new Invoice(new Customer('jack '));

try {
    $invoice->process(-10);

} catch (MissingBillingInfoException | InvalidArgumentException $exception) {
    dd($exception);
}
