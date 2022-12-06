<?php

declare(strict_types = 1);

function foo(): never
{
    echo 1;
    exit();
}

foo();
