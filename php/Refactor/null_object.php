<?php

require 'php/vendor/autoload.php';

// The Null Object Pattern

class NullCoupon
{
    public function discount($order)
    {
        return 0;
    }
}

class NullChecker
{
    public function check($file)
    {
        return [];
    }
}

class Coupon
{
    private function checkFile($file)
    {
        if ($this->hasCheckerFor($file)) {
            $checker = $this->getCheckerFor($file);
            return new CheckedFile($file, $violations);
        } else {
            $checker    = new NullChecker();
            $violations = $checker->check($file);
            return new CheckedFile($file, $violations);
        }
    }
}
