<?php
class Zesta{
    public $db;
    public $dbname;
    public $tablename;

    function hello(){
        return "hello" . PHP_EOL;
    }

    function __debugInfo()
    {
        echo "Take the control to print the variable.";
    }
}

$zesta1= new Zesta();
var_dump($zesta1);