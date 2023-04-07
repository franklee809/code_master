<?php

declare(strict_types = 1);

enum Poker: int
{
    case Clubs = 1;
    case Diamonds = 2;
    case Hearts = 3;
    case Spades = 4;

    public static function getType()
    {
        return static::Spades;
    }
}

print_r(Poker::Clubs);
print_r(Poker::getType());