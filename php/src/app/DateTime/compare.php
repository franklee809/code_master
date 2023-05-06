<?php

declare(strict_types = 1);

require __DIR__ . '/../../../vendor/autoload.php';

$datetimeA     = new DateTime('05/25/2023 12:12pm');
$datetimeB     = new DateTime('09/25/2023 12:12pm');
$interval      = new DateInterval('P2D');

// dump($datetimeA->diff($datetimeB)->format('%Y years, %m months, %d for days, and %H %i %s'));
$interval->invert = 1;
dump($datetimeA);
dump($interval);
$datetimeA->add($interval);
dump($datetimeA);
$datetimeA->sub($interval);
dd($datetimeA);
