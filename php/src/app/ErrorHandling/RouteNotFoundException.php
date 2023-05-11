<?php

namespace App\ErrorHandling;

use Exception;

class RouteNotFoundException extends Exception
{
    protected $message = '404 not found';
}
