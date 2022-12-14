<?php

require 'php/vendor/autoload.php';

// Disjoint Normal Form (DNF) types
// PHP 8.2 addresses several shortcomings and restrictions of PHP's type-system, allowing PHP applications to enjoy better type-safety. This includes adding support for true type, and allowing null and false types to be used as stand-alone types, and support for DNF types.

function percentage(): false|null    // Fatal error: Type contains both true and false, bool should be used
{
    return null;
    return false;
    return 1.1;
}

dd(percentage());