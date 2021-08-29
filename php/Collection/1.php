<?php

require 'php/vendor/autoload.php';

use Tightenco\Collect\Support\Collection;

echo __DIR__;
// Pricing Lamps and Wallets

$products = json_decode(file_get_contents('/Users/franklee/my_code-master/php/product.json'), true);

// Return collection instance
// var_dump(get_class(Collection::make($data)));
// var_dump(get_class(new Collection($data)));
// var_dump(get_class(collect($data)));

// Before refactor
$totalCost = 0;

foreach ($products as $product) {
    $brand = $product['Brand'];

    if ($brand == 'Oasis' || $brand == 'Monolith') {
        $variants = json_decode(($product['Color Swatches']), true);
        if (!$variants) {
            continue;
        }
        foreach ($variants as $productVariant) {
            $totalCost += $productVariant['price'];
        }
    }
}

// print_r($totalCost . "\n");

// After refactor
$totalCost = 0;

$products = new Collection($products);

$oasisAndMonolith = $products->filter(function ($product) {
    return collect(['Oasis', 'Monolith'])->contains($product['Brand']);
    // return in_array($product['Brand'], ['Oasis', 'Monolith']);
    // return $product['Brand'] == 'Oasis' || $product['Brand'] == 'Monolith';
});

// print_r(count($oasisAndMonolith));

// var_dump($oasisAndMonolith);
$variants = $oasisAndMonolith->flatMap(fn($val) => json_decode($val['Color Swatches'], true))->filter();

$final = $products->filter(fn($product) => collect(['Oasis', 'Monolith'])->contains($product['Brand']))
                 ->flatMap(fn($product) => json_decode($product['Color Swatches'], true))
                 ->sum('price');

// dd($final);