<?php

require 'php/vendor/autoload.php';

// Formatting Pull request

$violation = [
    'Opening brace must be the last content on the line',
    'Closing brace must be on a line by itself',
    'Each PHP statement must be on a line by itself',
];

// dd(collect($violation)->implode(","));


function buildComment($messages)
{
    $comment = '';
    foreach ($messages as $message) {
        $comment .= "- {$message}\n";
}
    return $comment;
}

function buildCommentWithCollection($messages)
{
    return collect($messages)->map(function($message){
        return "- {$message}\n";
    })->implode('');

}

dump(buildCommentWithCollection($violation));
dd(buildComment($violation));