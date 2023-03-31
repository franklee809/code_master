<?php

namespace App;

use App\Interface\DebtCollector;

class RockyCollection implements DebtCollector
{
    public function collect(float $oweAmount): float
    {
        return $oweAmount * 0.65;
    }
}
