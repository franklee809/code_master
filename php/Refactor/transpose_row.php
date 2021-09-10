<?php

use Illuminate\Support\Collection;

require 'php/vendor/autoload.php';


Collection::macro('transpose', function (): Collection {
    if ($this->isEmpty()) {
        return new static();
    }

    $firstItem = $this->first();

    $expectedLength = is_countable($firstItem) ? count($firstItem) : 0;

    array_walk($this->items, function ($row) use ($expectedLength) {
        if (is_countable($row) && count($row) !== $expectedLength) {
            throw new \LengthException("Element's length must be equal.");
        }
    });

    $items = array_map(function (...$items) {
        return new static($items);
    }, ...array_map(function ($items) {
        return $this->getArrayableItems($items);
    }, array_values($this->items)));

    return new static($items);
});

$request = [
    'names' => [
        'Jane',
        'Bob',
        'Mary',
    ],
    'emails' => [
        'jane@example.com',
        'bob@example.com',
        'mary@example.com',
    ],
    'occupations' => [
        'Doctor',
        'Plumber',
        'Dentist',
    ],
];

    $contacts        = [];
    $names           = $request['names'];
    $emails          = $request['emails'];
    $occupations     = $request['occupations'];

    foreach ($names as $i => $name) {
        $contacts[] = [
            'name'       => $name,
            'email'      => $emails[$i],
            'occupation' => $occupations[$i],
        ];
    }

    dd(collect($request)->transpose());
    // dd(collect($contacts)->transpose());