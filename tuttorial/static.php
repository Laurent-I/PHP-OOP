<?php

class Calculator{
    static public $result;
    static function add($a, $b){
        self::$result = $a + $b;
    }
}


Calculator::add(3678, 23456);
echo Calculator::$result;
?>