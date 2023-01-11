<?php

declare(strict_types=1);

require('php/vendor/autoload.php');

function sum(int $firstInput, int $secondInput) {
    return $firstInput + $secondInput;
}

$x = sum(5, 10);
// dd('this will stop the global script execution'); return;
dd($x);


// declare tick

// declare - encoding

// function onTick()
// {
//     echo 'Tick' . PHP_EOL;
// }

// register_tick_function('onTick');
// declare(ticks=1);

// $i = 0;
// $length = 10;

// while ($i < $length) {
//     echo $i++;
// }



// declare - strict_types
// e.g
// declare(strict_types=1);
