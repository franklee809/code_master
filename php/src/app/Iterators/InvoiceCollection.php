<?php

namespace App\Iterators;

use Iterator;

class InvoiceCollection implements Iterator
{
    public string $id;
    public int $key;

    public function __construct(public array $invoices)
    {
    }

    public function current(): mixed
    {
        dump(__METHOD__);

        return $this->invoices[$this->key];
        // return current($this->invoices);
    }

    public function next(): void
    {
        dump(__METHOD__);

        ++$this->key;
        // next($this->invoices);
    }

    public function key(): mixed
    {
        dump(__METHOD__);

        return $this->key;
        // return key($this->invoices);
    }

    public function valid(): bool
    {
        dump(__METHOD__);

        return isset($this->invoices[$this->key]);
        // return current($this->invoices) !== false;
    }

    public function rewind(): void
    {
        dump(__METHOD__);

        $this->key = 0;
        // reset($this->invoices);
    }
}
