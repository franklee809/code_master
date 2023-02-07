<?php

// Configuration file

require 'php/vendor/autoload.php';

$errorReportConfig = ini_get('error_reporting');

dump($errorReportConfig);
ini_set('error_reporting', E_ALL & ~E_WARNING);

dd(ini_get('error_reporting'));
