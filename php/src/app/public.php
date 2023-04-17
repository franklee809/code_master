<?php

declare(strict_types = 1);

use App\Customer;
use App\Invoice;
use App\CustomInvoice;

require __DIR__ . '/../../vendor/autoload.php';

$invoiceA      = new Invoice(new Customer('mike'), 10.0, 12);
$invoiceB      = new Invoice(new Customer('john'), 10.0, 12);
$invoiceC      = $invoiceA;

// $invoiceC->amount = 2000;
dump($invoiceA, $invoiceB);
dump($invoiceA == $invoiceB);
dd($invoiceA === $invoiceB);
