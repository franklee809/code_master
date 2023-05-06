<?php

declare(strict_types = 1);

require __DIR__ . '/../../../vendor/autoload.php';

$from = new DateTimeImmutable();
$to   = $from->add(new DateInterval('P1M'));

// introduce DateTimeImmutable
// second method is use the clone method


dd($from->format('d/m/Y'), '-', $to->format('d/m/Y'));
