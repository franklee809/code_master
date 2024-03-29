<?php

namespace App\Enums;

class Status
{
    public const PAID     = 'paid';
    public const PENDING  = 'pending';
    public const DECLINED = 'declined';
    public const ALL_STATUSES    = [
        self::PENDING  => 'Paid',
        self::PAID     => 'Pending',
        self::DECLINED => 'Declined',
    ];
}
