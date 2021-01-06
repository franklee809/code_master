<?php 
require 'vendor/autoload.php';
use Carbon\Carbon;
// function isValidCoordinates($coordinates) {
//     if(preg_match("/-\s|[a-zA-Z]/",$coordinates) == true){return false;}
//     else{
//       $arr = explode(",",$coordinates);
//       foreach($arr as $key => $val){
//         if(substr_count($val,'.'>1)){return false;}
//         // var_export(abs((float)$val)>180);
//         if($key == 0 && abs((float)$val)>90) {return false;}
//         if($key == 1 && abs((float)$val)>180){return false;}
//         if($key == 2){return false;}
//         if((float)$val==0){return false;}
//       }
//       return true;
//     }
//   }
// var_export(isValidCoordinates("0, 1,2"));
// "6.325624, 43.34345.345",
// "0, 1,2",
// "0.342q0832, 1.2324",
// "23.245, 1e1"
// $time = time();
// $key = '00c8aa45b2e85c8238eee0cff658f411'; // staging key
// $action = [
//     'app' => 1,
//     'action' => 'user/balance',
//     'time' => $time,
//     'tc' => floor($time / 300)
// ];
// ksort($action);
// $action = json_encode($action);
// $sign =md5(hash_hmac('sha256', $action, $key, true));
// echo $time."\n".$sign;

// $a = "123";
// echo gettype(strval($a));
?>