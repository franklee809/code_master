<?php

$closure = Closure::fromCallable(function () {
    echo "Hello World\n";
});

print_r($closure());
