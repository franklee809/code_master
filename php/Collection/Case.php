<?php

require 'php/vendor/autoload.php';

class GithubScore
{
    private $username;

    public function __construct($username = null)
    {
        $this->username = $username;
    }

    public static function forUser($username)
    {
        return (new self($username))->score();
    }

    private function score()
    {
        return $this->events()->pluck('type')->map(function ($eventType) {
            return $this->lookupScore($eventType);
        })->sum();
    }

    private function events()
    {
        $url = "https://api.github.com/users/{$this->username}/events";
        return collect(json_decode(file_get_contents($url), true));
    }

    private function lookupScore($eventType)
    {
        return collect([
            'PushEvent'          => 5,
            'CreateEvent'        => 4,
            'IssuesEvent'        => 3,
            'CommitCommentEvent' => 2,
        ])->get($eventType, 1);
    }
}


$frank = (new GithubScore('frank-chang'))->score();