<?php

use Illuminate\Support\Str;

require 'php/vendor/autoload.php';

$folders = scandir('/Users/franklee/commerce-api-v2/modules/component');

dd('"' . collect($folders)->filter(function ($value) {
    return !Str::startsWith($value, '.');
})->map(function ($value) {
    return 'modules/component/' .$value . '/src';
})->implode("\n") . '"' );