<?php

$userdb = [ [
    "uid" => '100',
    "name" => 'Sandra Shush', "url" => 'urlof100',
    ], 
    [
        "uid" => '5465',
        "name" => 'Stefanie Mcmohn', "pic_square" => 'urlof100',
    ], 
    [
        "uid" => '40489',
        "name" => 'Michael', "pic_square" => 'urlof40489',
    ] 
];
// array_search('40489',)
var_dump(array_column($userdb,'uid'));
?>