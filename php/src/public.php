<?php

declare(strict_types=1);

require 'php/vendor/autoload.php';

$class = 'Transaction';

$transaction = new $class(10, 'this is a testing transaction');

$transaction->addTax(8)->applyDiscount(10);

dd($transaction);
dd(phpinfo());
// $root = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR;

// define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
// define('FILES_PATH', $root . 'transaction_files'. DIRECTORY_SEPARATOR);
// define('VIEWS_PATH', $root . 'views'. DIRECTORY_SEPARATOR);


// require APP_PATH . "App.php";

// $files = getTransactionFiles(FILES_PATH);

// $transactions = [];

// foreach($files as $file) {
//     $transactions = array_merge($transactions, getTransactions($file));
// }

// require VIEWS_PATH . 'transaction.php';
// dd($transactions[1]);