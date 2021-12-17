<?php

class User {
    public function __construct(private int | string $name) {}
    public function getName(int&string $name) {}
}

$user1 = new User(1);
$user2 = new User('1');

var_dump($user1, $user2);