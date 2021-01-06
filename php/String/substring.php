<?php 

    $foo = ' Hello World';
    // echo $foo{7};
    $substr = substr($foo, 6, 1); // also returns 'w' substr($foo, 6, 2); // returns 'wo'
    echo $substr;
    
    $str = substr_replace($foo,'W12',7,3);
    echo $str;


?>