<?php

$games = ['call of duty', 'mobile legends', 'PUBG', 'League of legends'];

usort($games, function ($a, $b) {
    return $b <=> $a;
});
// sort($games);

var_dump($games);