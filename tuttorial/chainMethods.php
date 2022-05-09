<?php
class chainMethod{
    public $name;
//Call this method frist to change the value of the property
    function method1(){
        echo "Hello From Method1 <br>";
        $this->name = "Chain Methods";
        return $this;
    }
//Call this method to display the property value
    function method2(){
        echo "Hello from Method2 ($this->name)".PHP_EOL;
    }
}


$cm = new chainMethod();
$cm->method1()->method2();// This is  a chain and must be called in sequence.
?>