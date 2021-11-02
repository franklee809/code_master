<?php
    $a = '123';
    define('asd1',$a);
    class aA{
        private $asd = '123';
        public function a(){
            $this->b();
            echo $this->asd. PHP_EOL;
        }

        public static function b(){
            echo 'asdsadsad';
            return 1;
        }

    }
    // echo asd1;
    $test = new aA();
    echo $test->a();

?>
