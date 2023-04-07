<?php

function add($current = 0 , int ...$numbers)
{
    return array_sum([$current,...$numbers]);
}

var_dump(add(3, 2, 3));
