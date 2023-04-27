<?php

declare(strict_types = 1);

use App\Serialize\Invoice;

require __DIR__ . '/../../../vendor/autoload.php';

// dump(serialize(true));
// dump(serialize(1));
// dump(serialize(2.5));
// dump(serialize('test'));
// dump(serialize([1,2,3]));
// dd(serialize([1 => '123',2 => '12323',3 => '1231231']));

$invoice       = new Invoice(123.0, "test", "1423 2323 2323 2323");
$string        = serialize($invoice);

$class         = unserialize($string);

dd($invoice, $class, $string === $class);
