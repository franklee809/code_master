<?php

declare(strict_types = 1);

require __DIR__ . '/../../vendor/autoload.php';

$obj = new class(1, 2, 3) {
    public function __construct(public int $var1, public int $var2, public int $var3)
    {
    }
};

class A {
    public function __construct(public int $x, public int $y) {
    }
    public function foo()
    {
        dump('foo');
    }

    public function bar(): object
    {
        return new class($this->x, $this->y) extends A{
            public function __construct(public int $x, public int $y)
            {
                parent::__construct($x, $y);
                dd($this->foo());
            }
        };
    }
}


dd((new A(1,2))->bar());
