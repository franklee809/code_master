<?php

require('php/vendor/autoload.php');

$paymentStatus = -1;

switch ($paymentStatus) {
    case 1:
        echo 'Paid';
        break;

    case 2:
    case 3:
        echo "Payment declined";
        break;
    case 0:
        echo "Payment declined";
        break;
    default:
        echo "unknown";
        break;
}

echo PHP_EOL;

print match($paymentStatus) {
    1 => "Paid",
    2,3 => "Payment declined",
    0 => "Pending payment",
    default => 'unknown',
};