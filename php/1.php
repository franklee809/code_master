<?php 
require 'vendor/autoload.php';
use Carbon\Carbon;
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
?> 