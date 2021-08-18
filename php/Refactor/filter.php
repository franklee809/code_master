<?php

$items = [
    ['product_name' => 'Socks', 'price' => '2.00', 'quantity' => 100],
    ['product_name' => 'Nike', 'price' => '122.00', 'quantity' => 200]
];

function filter($items, $func)
{
    $result = [];
    foreach ($items as $item) {
        if ($func($item)) {
            $result[]= $item;
        }
    }
    return $result;
}

$result = filter($items, function ($item) {
    return (int)$item['price'] > 100;
});

$A = "value"; $B = $A;

// xdebug_debug_zval('A');
// var_dump($result);
