<?php

// ON https://www.php.net/manual/en/class.arrayaccess.php
// interface ArrayAccess
// {
//     // Allow the collection to respond to `isset($items['key'])` checks
//     abstract public function offsetExists($offset);

//     // Allow retrieving an item from the collection using `$items['key']`
//     abstract public function offsetGet($offset);

//     // Allow adding an item to the end of the collection using `$items[] =
//     // $foo` as well as at a specific key using `$items['key'] = $foo`
//     abstract public function offsetSet($offset, $value);

//     // Allow removing an item from the collection using `unset($items['key'])
//     abstract public function offsetUnset($offset);
// }

// interface Countable
// {
//     // Allow the collection to respond to `isset($items['key'])` checks
//     abstract public function count();
// }
class Collection implements ArrayAccess, Countable, IteratorAggregate
{
    protected $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public static function make($items)
    {
        return new static ($items);
    }

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->items);
    }

    public function offsetGet($offset)
    {
        return $this->items[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if ($offset == null) {
            $this->items[] = $value;
        } else {
            $this->items[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->items[$offset]);
    }

    public function count()
    {
        return count($this->items);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    public function map($callback)
    {
        return new static(array_map($callback, $this->items));
    }

    public function filter($callback)
    {
        return new static(array_filter($this->items, $callback));
    }

    public function toArray()
    {
        return $this->items;
    }
}


$employees = new Collection([
    ['name' => 'Mary', 'email' => 'mary@example.com', 'salaried' => true],
    ['name' => 'John', 'email' => 'john@example.com', 'salaried' => false],
    ['name' => 'Kelly', 'email' => 'kelly@example.com', 'salaried' => true],
]);

// var_dump($employees->filter(function ($employee) {
//     return $employee['salaried'];
// })->count());

foreach ($employees as $item) {
    var_dump($item);
}