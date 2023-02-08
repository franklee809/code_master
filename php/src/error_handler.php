<?php

require('php/vendor/autoload.php');

// error handling

error_reporting(E_ALL & ~ E_WARNING);

// dd(1);

function customErrorHandler(int $type, string $message, ?string $file = null, ?int $line = null){
    dump('custom Error');
    dd("$type : $message in $file on line $line");
}

set_error_handler('customErrorHandler',  E_ALL); // can overwrite existing error reporting configuration


trigger_error('Example error', E_USER_ERROR);
