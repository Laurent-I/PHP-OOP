<?php

use Student as GlobalStudent;

class Student {
    public $name;
    public $class;

    //Magic Methods
    function __construct($name , $class)
    {
        $this->name = $name;
        $this->class = $class;
        echo "Konichiwa <br>";
    }

    function printDetails(){
        echo "$this->name is studying in $this->class";
    }
}

$student1 = new Student("Laurent", "Year 1");
$student1->printDetails();
?>