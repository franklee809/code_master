<?php

require 'vendor/autoload.php';


$user = [
    'name' => [
        // 'first' => 'joe',
        'last' => 'exotic',
    ]
];

// both are similar
// $user['name']['first'] = $user['name']['first'] ?? 'Not Provided';

$user['name']['first'] ??= 'Not Provided';

var_dump($user);