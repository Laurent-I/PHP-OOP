<?php

use Employee as GlobalEmployee;

abstract class Company{
    protected $name;
    public $subject;
    abstract function setName($name);
    abstract function getName() :string;
    abstract function setExpert($subject);
}

class Emp extends Company{
    function setName($name){
    $this->name = $name;
    }
    function getName() :string{
    return $this->name;
    }
    function setExpert($subject){
    $this->subject = $subject;
    }
    function getExpert(){
        return $this->subject;
    }
}

$employee1 = new Emp();
$employee1->setName("Irakarama Laurent");
echo $employee1->getName();
echo "<br>";
$employee1->setExpert("PHP Senior Developer");
echo $employee1->getExpert();
echo "<br>";

?>