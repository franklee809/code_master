<?php

declare(strict_types = 1);

use Carbon\Carbon;

require __DIR__ . '/../../../vendor/autoload.php';

dd(Carbon::now()->parse('2022-05-22'));
