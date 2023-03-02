<?php

require 'php/vendor/autoload.php';

$obj = (object) [1,2,34];// ^ {#4  +"0": 1  +"1": 2  +"2": 34}
$obj = (object) 1; //^ {#3+"scalar": 1}
$obj = (object) false; //^ {#4+"scalar": false}
$obj = (object) null; // ^ {#3}
dd($obj);
