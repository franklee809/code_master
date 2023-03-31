<?php

declare(strict_types = 1);

use App\Element\{Boolean, Checkbox, Field, Radio, Text};

require __DIR__ . '/../../vendor/autoload.php';

$fields        = [
    new Text('baseField'),
    new Checkbox('baseField'),
    new Radio('baseField'),
];

foreach($fields as $field) {
    dump($field->render());
}
