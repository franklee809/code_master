<?php

require 'php/vendor/autoload.php';
// CSV Surgery 101

$shifts = [
    'Shipping_Steve_A7',
    'Sales_B9',
    'Support_Tara_K11',
    'J15',
    'Warehouse_B2',
    'Shipping_Dave_A6',
];

$shiftIds = collect($shifts)->map(function ($shift) {
    return collect(explode('_', $shift))->last();
});

dd($shiftIds);
