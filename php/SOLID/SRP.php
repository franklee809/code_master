<!-- Single-responsibility Principle
A class should have one and only one reason to change, meaning that a class should have only one job. -->

<?php

// FALSE

class User {

    private $email;

    // Getter and setter...

    // TODO: this part
    public function store() {
        // Store attributes into a database...
    }
}

// CORRECT
class User2
{
    private $email;

    // Getter and setter
}

class UserDB
{
    public function store($email)
    {
        // Store into DB
    }
}
