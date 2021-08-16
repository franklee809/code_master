<?php

$items = [
    ['product_name' => 'Socks', 'price' => '2.00', 'quantity' => 100],
    ['product_name' => 'Nike', 'price' => '122.00', 'quantity' => 200]
];

function map($items, $func)
{
    $result = [];

    foreach ($items as $item) {
        $result[] = $func($item);
    }
    return $result;
}

// // Before

// foreach ($items as $item) {
//     $result[] = [
//         'product_name' => $item['product_name'],
//         'price'        => $item['price'],
//     ];
// }var_dump($result);


$result = map($items, function ($item) {
    return [
        'product_name' => $item['product_name'],
        'price'        => $item['price'],
    ];
});
var_dump($result);
