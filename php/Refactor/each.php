<?php

$items = [
    ['product_name' => 'Socks', 'price' => '2.00', 'quantity' => 100],
    ['product_name' => 'Nike', 'price' => '122.00', 'quantity' => 200]
];

function each1($items, $func)
{
    foreach ($items as $item) {
        $func($item);
    }
}

each1($items, function($item){
    echo $item['product_name'] . ': ' . $item['price'] . '<br>' . PHP_EOL;
});