<?php

require 'php/vendor/autoload.php';

# String syntax

$firstName = 'Will';
$lastName = "Smith";

// dump($firstName, $lastName);

// dd("$lastName 123");

// heredoc
$line1 = 1;
$line2 = 2;
$heredoc = <<<TEXT
            LINE $line1
            LINE $line2
            LINE 3
        TEXT;

dump($heredoc);

// nowdoc

$nowdoc = <<<'TEXT'
            LINE $line1
            LINE $line2
            LINE 3
        TEXT;

dump($nowdoc);