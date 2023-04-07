<?php

require 'php/vendor/autoload.php';

// Dynamic Properties Deprecated


class User {
    public $name;
}
$user = new User();
$user->first_name = 123; // Deprecated: Creation of dynamic property User::$first_name is deprecated
