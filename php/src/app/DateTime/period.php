<?php

declare(strict_types = 1);

require __DIR__ . '/../../../vendor/autoload.php';

$period        = new DatePeriod(new DateTime('01.06.2023'), new DateInterval('P1D'), (new DateTime('31.06.2023'))->modify('+1 day'), DatePeriod::EXCLUDE_START_DATE);

foreach ($period as $date) {
    dump($date->format('d.m.Y'));
}
