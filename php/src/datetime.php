<?php

require 'php/vendor/autoload.php';

$currentTime = time();

dump(mktime(1, 20, 30));
$customTimeStamp = strtotime('2023-01-31');
dump(date('m/d/Y h:i:s', $customTimeStamp));
dump(date_parse($customTimeStamp));

date_default_timezone_set('Asia/Kuala_Lumpur');
dump(date_default_timezone_get());

dump(date('m/d/Y h:i:s', $currentTime + 5 * 24 * 60 * 60));
dump(date('m/d/Y h:i:s', $currentTime - 60 * 24 * 60));
dd(date('m/d/Y h:i:s',$currentTime));
