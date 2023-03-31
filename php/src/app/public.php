<?php

declare(strict_types = 1);

use App\CollectionAgency;
use App\RockyCollection;
use App\Service\DebtCollectionService;

require __DIR__ . '/../../vendor/autoload.php';

$class = new DebtCollectionService;

$class->collectDebt(new RockyCollection);
