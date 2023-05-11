<?php

declare(strict_types = 1);

use App\Classes\Home;
use App\Classes\Invoice;

require __DIR__ . '/../../../vendor/autoload.php';

$router = new App\Router;

$router->register('/', [Home::class ,'index'])
        ->register('/invoices', [Invoice::class, 'index'])
        ->register('/invoices/create', [Invoice::class, 'create']);

dd($router->resolve('/invoices/create'));
