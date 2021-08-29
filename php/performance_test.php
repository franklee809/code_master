<?php
require 'php/vendor/autoload.php';
use Carbon\Carbon;



// $json3 = [];
// $json3['age'] = $age;
// var_dump(json_encode($json3));
// exit();
$execution1 = function()
{
    $age = 12;
    $json1 = "{name : 'Lee', age : $age}";
};

$execution2 = function()
{
    $age = 12;
    $json2 = '{name : "Lee", age : '.$age.'}';
};

$execution3 = function()
{
    $json3['name'] = 'Lee';
    $json3['age'] = 12;
    $json3 = json_encode($json3);
    $json3 = [];
};

function calculateTime($func)
{
    $startTime = Carbon::now();

    for ($x = 0; $x <= 10000; $x++) {
        $func();
    }
    $finishTime = Carbon::now();

    $totalDuration = $finishTime->floatDiffInRealSeconds($startTime);
    var_dump($totalDuration);
}


calculateTime($execution1);
calculateTime($execution2);
calculateTime($execution3);


exit();




// $json1 = "{name : 'Lee', age : $age}";
// $json2 = '{name : "Lee", age : '.$age.'}';
// $json3['name'] = 'Lee';
// $json3['age'] = $age;
// $json3 = json_encode($json3);
// var_dump($json3);

// BASE 64 encode to MIME filetype (with and without whitespace)
// $json_with_space = '{123:  "123"    }';

// $json_with_space = str_replace(' ', '', $json_with_space);
// $json_without_space = '{123:"123"}';


// var_dump(base64_encode($json_with_space));
// var_dump(base64_encode($json_without_space));


// $obj = (object) array('1' => 'foo');
// echo $obj->{'1'}; // outputs 'bool(true)' as of PHP 7.2.0; 'bool(false)' previously
// var_dump(key($obj)); // outputs 'string(1) "1"' as of PHP 7.2.0; 'int(1)' previously


// (string) now()->format('ymdHis').dechex(user()->id).str_pad(dechex(rand(0,1048575)), 5 ,'0', STR_PAD_LEFT);
// echo Carbon::now()->format('ymd').dechex(24211).str_pad(dechex(rand(0,1048575)), 5 ,'-', STR_PAD_LEFT);
// echo Carbon::today()->toDateString();
// echo json_encode([1=>'123',2=>123,3=>123]);

// var_dump(json_decode('{"shop_id" : 0,"referral_username" : "false"}',true));
// $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

// var_dump(json_decode($json));
// $date = "2020-02-02 00:00:00";

// echo $date->format();
