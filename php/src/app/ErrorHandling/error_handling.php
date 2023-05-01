<?php

declare(strict_types = 1);

use App\ErrorHandling\{Customer, Invoice, MissingBillingInfoException};

require __DIR__ . '/../../../vendor/autoload.php';

$invoice = new Invoice(new Customer('jack '));

set_exception_handler(function (\Throwable $e) {
    dd($e->getMessage());
});


// array_rand([], 1);
try {
    $invoice->process(-10);

} catch (MissingBillingInfoException | InvalidArgumentException $exception) {
    dd($exception);
}
