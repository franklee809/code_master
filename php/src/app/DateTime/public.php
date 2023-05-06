<?php

declare(strict_types = 1);

// use App\DateTime\Invoice;

require __DIR__ . '/../../../vendor/autoload.php';

$datetime = new DateTime('04/05/2023 12:12:12'); // this will convert the datetime format to US (mm-dd-yyyy)
// can use createFromFormat and pass in the right format or
// use the dot and dash symbol to replace the /  (04.05.2023 12:12:12)
// dump($datetime->getTimezone()->getName(), $datetime);

// $datetime->setTimezone(new DateTimeZone('Asia/Shanghai'));
// // dump($datetime->getTimezone()->getName(), $datetime);
// // dd($datetime->getTimezone()->getName(),$datetime->format('Y/m/d h:i:s'));
// $datetime->setDate(2023, 5, 3)->setTime(8, 30, 40);
// dd($datetime->getTimezone()->getName(), $datetime->format('Y/m/d h:i:s'));

$datetime = DateTime::createFromFormat('d/m/Y H:i:s' ,'04/05/2023 12:12:12')->setTime(0,0 );
dd($datetime);
