<?php

declare(strict_types = 1);

use App\Iterators\{Invoice, InvoiceCollection, InvoiceCollection2};

require __DIR__ . '/../../../vendor/autoload.php';

// foreach([1,2,3,4,5] as $value) {
//     dump($value);
// }
$invoiceCollection = new InvoiceCollection2([new Invoice(12), new Invoice(100), new Invoice(50)]);
// $invoiceCollection = new InvoiceCollection([new Invoice(12), new Invoice(100), new Invoice(50)]);

// foreach($invoiceCollection as $value) {
//     dump($value);
// }
foo($invoiceCollection);
foo([]);
foo(123);

function foo(iterable $iterable)
{
    foreach ($iterable as $item) {
        dump($item);
    }
}
