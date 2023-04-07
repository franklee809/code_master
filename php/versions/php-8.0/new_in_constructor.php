<?php

class Customer {
    public function __construct() {
        return "New customer!\n";
    }
}
class User {
    // NEW keyword is used to create a new object
    public function __construct(public $address = new Customer()) {
        echo "User class constructor called\n";
    }
}

$user = new User();
var_dump($user);