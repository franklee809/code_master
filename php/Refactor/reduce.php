<?php

$items = [
    ['product_name' => 'Socks', 'price' => '2.00', 'quantity' => 100],
    ['product_name' => 'Nike', 'price' => '122.00', 'quantity' => 200]
];

$callback = function ($accumulator, $item) {
    return $accumulator + $item['price'];
};

function reduce($items, $callback, $initial)
{
    $accumulator = $initial;

    foreach ($items as $item) {
        $accumulator = $callback($accumulator, $item);
    }
    return $accumulator;
}

var_dump(reduce($items, $callback, 0));