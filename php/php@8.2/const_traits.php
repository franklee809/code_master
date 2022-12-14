<?php

require 'php/vendor/autoload.php';

trait UserType
{
    public string $type;
    const ADMIN = 'admin'; // for php 8.2 and above

    public function isAdmin(): bool
    {
        return $this->type === self::ADMIN;
    }
}

class User {
    use UserType;

    // const ADMIN = 'admin'; // for older version
}

$user = new User;
$user->type = 'admin';

dd($user->isAdmin());