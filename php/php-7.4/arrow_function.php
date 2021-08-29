<?php

require 'php/vendor/autoload.php';


$series =  collect([new Series('php series'), new Series('php series 2')]);

// $series->each(function ($s) {
//     $s->title = ucwords($s->title);
// });

// new php 7.4
$series->each(fn($s) => $s->title = ucwords($s->title));

var_dump($series);