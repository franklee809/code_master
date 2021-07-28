<!-- Dependency Inversion Principle

Entities must depend on abstractions not on concretions. It states that the high level module must not depend on the low level module, but they should depend on abstractions. -->

<?php

// TODO: WITHOUT Dependency Inversion Principle
class UserDB
{
    private $dbConnection;

    public function __construct(DB $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function store()
    {
        echo 'Store the user info into database';
    }
}

// TODO: WITH Dependency Inversion Principle

interface DBConnectionInterface
{
    public function connect();
}

class MySQLConnection implements DBConnectionInterface
{
    public function connect()
    {
        echo 'Connect to MYSQL';
    }
}

class UserDB2
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function store(User $user)
    {
        $this->dbConnection->connect();
    }
}
