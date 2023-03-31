<?php

namespace App\Service;

use App\Interface\DebtCollector;

class DebtCollectionService
{
    public function collectDebt(DebtCollector $collector)
    {
        $owedAmount      = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);

        dump("Collected RM {$collectedAmount} out of RM {$owedAmount}");
    }
}
