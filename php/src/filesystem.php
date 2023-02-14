<?php

require 'php/vendor/autoload.php';

// working with directory
$dir = __DIR__;
$dir = scandir($dir);

// mkdir('foo/bar', recursive: true);
// rmdir('foo');

// if (file_exists('foo.txt')) {
//     dump(filesize('foo.txt')); // will cache the output
//     file_put_contents('foo.txt', 'hello world 12 asdadasd3');

//     clearstatcache(); // reset the filesize cache
//     dump(filesize('foo.txt'));
// }else{
//     dump('file not found');
// }

// dump('is_file' ,is_file($dir[3]));
// dump('is_dir',is_dir($dir[3]));

// dd($dir);


// if (!file_exists('foobar.txt')) {
//     dd('foobar.txt is not exist');
//     return;
// }

// fopen and fclose function

// $file = fopen('foo.txt', 'r');

// while ( ($line = fgets($file)) !== false) {
//     dump($line);
// }
// fclose($file);

// dd($file);

// file_get_contents, file_put_contents, rename

// dd(file_get_contents('foo.txt', offset: 3, length: 2));

// file_put_contents('foo.txt', 'world');

rename('foo.txt', 'bar.txt');
