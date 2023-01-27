<?php

require 'php/vendor/autoload.php';

trait TraitOne
{
    public function message()
    {
        dd('Trait One');
    }
}

trait TraitTwo
{
    public function message()
    {
        dd('Trait Two');
    }
}

class myClass {
    use TraitOne, TraitTwo {
        TraitOne::message insteadof TraitTwo;
    }
}

$test = (new myClass)->message();
dd($test);