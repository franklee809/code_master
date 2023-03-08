<?php

declare(strict_types=1);

// require 'php/vendor/autoload.php';
require_once './PaymentGateway/Stripe/Transaction.php';
require_once './PaymentGateway/Paddle/Transaction.php';
require_once './PaymentGateway/Paddle/CustomerProfile.php';

use PaymentGateway\Paddle\Transaction;

$transactionStripe = new Transaction();
// $transactionPaddle = new PaymentGateway\Paddle\Transaction();

var_dump($transactionStripe);
// var_dump($transactionPaddle);
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
