<?php

declare(strict_types = 1);

require __DIR__ . '/../../vendor/autoload.php';

use App\PaymentGateway\Stripe\Transaction;
use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;

$transactionStripe = new Transaction();
$transactionPaddle = new PaddleTransaction();
// $transactionPaddle = new PaymentGateway\Paddle\Transaction();

dump($transactionStripe);
dd($transactionPaddle);
