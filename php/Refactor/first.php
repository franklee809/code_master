<?php

require 'php/vendor/autoload.php';

$names = collect(['Adam', 'Katherine', 'Jane', 'Steven']);

$filter = $names->first(function($name){
    return strtolower($name[0]) == 'z';
}, function() {
    throw new Exception('No name found');
});

dd($filter);
