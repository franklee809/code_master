<?php

require 'php/vendor/autoload.php';

$x = 5;

function foo() {
    static $y = 12;
    dump($y);
    $y++;
    // global $x; // reference to global $x
    // dd($x);
    dump($GLOBALS['x']); // or use super global
}

foo();
foo();
foo();

// include('scope_test.php');

// dd($x);