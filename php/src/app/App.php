<?php

declare(strict_types=1);

function getTransactionFiles(string $dirPath): array
{
    $files = [];

    foreach(scandir($dirPath) as $file){
        if (is_dir($file)) {
            continue;
        }
        $files[] = $dirPath . $file;
    }
    return $files;
}

function getTransactions(string $filename): array
{
    if (! file_exists($filename)) {
        trigger_error("File $filename doesn't exist ", E_USER_ERROR);
    }

    $file = fopen($filename, 'r');

    $transactions = [];

    while ($transaction = fgetcsv($file)) {
        $transactions[] = $transaction;
    }

    return $transactions;
}