<?php

namespace App;

use App\Interface\DebtCollector;

class CollectionAgency implements DebtCollector
{
    public function collect(float $oweAmount): float
    {
        $guaranteed = $oweAmount * 0.5;

        return mt_rand((int) $guaranteed, (int) $oweAmount);
    }
}
