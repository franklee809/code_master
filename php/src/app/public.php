<?php

declare(strict_types = 1);

require __DIR__ . '/../../vendor/autoload.php';

use App\DB;
use App\Enums\Status;
use App\PaymentGateway\Stripe\Transaction;
use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;

$transactionStripe = new Transaction();
$transactionPaddle = new PaddleTransaction(14);

$reflectionProperty = new \ReflectionProperty(PaddleTransaction::enca class, 'amount');
$reflectionProperty->setAccessible(true);

$reflectionProperty->setValue($transactionPaddle, 12);

dd($reflectionProperty->getValue($transactionPaddle));
dd($transactionPaddle->amount);


// $transactionPaddle->setStatus(Status::PAID);
// dump($transactionStripe);
// dd($transactionPaddle);
