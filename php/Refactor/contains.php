<?php

require 'php/vendor/autoload.php';

$names = collect(['Adam', 'Katherine', 'Jane', 'Steven']);

$absent = $names->contains(function($value){
    return strlen($value) > 5;
});

dd($absent);
