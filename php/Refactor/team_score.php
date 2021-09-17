<?php

use Illuminate\Support\Collection;

require 'php/vendor/autoload.php';

$scores = [
    ['score' => 76, 'team' => 'A'],
    ['score' => 62, 'team' => 'B'],
    ['score' => 82, 'team' => 'C'],
    ['score' => 86, 'team' => 'D'],
    ['score' => 91, 'team' => 'E'],
    ['score' => 67, 'team' => 'F'],
    ['score' => 67, 'team' => 'G'],
    ['score' => 82, 'team' => 'H'],
];

function rank_scores($scores)
{
    return collect($scores)
            ->pipe('assign_initial_rankings')
            ->pipe('adjust_rankings_for_ties')
            ->sortBy('rank');
}

function assign_initial_rankings($scores)
{
    return $scores->sortByDesc('score')->values()->zip(range(1, $scores->count()))->map(function ($scoreAndRank) {
        list($score, $rank) = $scoreAndRank;
        return array_merge($score, [
            'rank' => $rank
        ]);
    });
}

function adjust_rankings_for_ties($scores)
{
    return $scores->groupBy('score')
            ->map(function ($tiedScores) {
                return apply_min_rank($tiedScores);
            })->collapse();
}

function apply_min_rank($tiedScores)
{
    $lowestRank = $tiedScores->pluck('rank')->min();
    return $tiedScores->map(function ($rankedScore) use ($lowestRank) {
        return array_merge($rankedScore, [
            'rank' => $lowestRank
        ]);
    });
}

dd(rank_scores($scores));
