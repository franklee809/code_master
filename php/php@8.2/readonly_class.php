<?php

require 'php/vendor/autoload.php';

// php version < 8.2
class User
{
    public readonly string $name;
    public readonly string $email;

    public function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }
}

$user = new User('frank', 'test@gmail.com');

// dd($user->name = 1); // Fatal error: Uncaught Error: Cannot modify readonly property User::$name

// readonly class in php 8.2
// this method doesn work for traits, interface and enums.
readonly class User2
{
    public string $name;
    public string $email;
    // public $password;    // Fatal error: Readonly property User2::$password must have type

    public function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }
}
$user2 = new User2('frank', 'test@gmail.com');

// dd($user2->name = 1);    // Fatal error: Uncaught Error: Cannot modify readonly property User2::$name
dd($user2->password = 1);   // Fatal error: Uncaught Error: Cannot create dynamic property User2::$password