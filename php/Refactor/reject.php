<?php

$items = [
    ['product_name' => 'Socks', 'price' => '2.00', 'quantity' => 100],
    ['product_name' => 'Nike', 'price' => '122.00', 'quantity' => 200]
];

function reject($items, $func)
{
    $result = [];
    foreach ($items as $item) {
        if (!$func($item)) {
            $result[]= $item;
        }
    }
    return $result;
}

$result = reject($items, function ($item) {
    return (int)$item['price'] > 100;
});

var_dump($result);
