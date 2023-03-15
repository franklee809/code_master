<?php

declare(strict_types = 1);

require __DIR__ . '/../../vendor/autoload.php';

use App\DB;
use App\Enums\Status;
use App\PaymentGateway\Stripe\Transaction;
use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;

$transactionStripe = new Transaction();
$transactionPaddle = new PaddleTransaction();

dd($transactionPaddle->process());


// $transactionPaddle->setStatus(Status::PAID);
// dump($transactionStripe);
// dd($transactionPaddle);
