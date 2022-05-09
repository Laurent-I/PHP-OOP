<?php
class Student{ 
    public $name;
    public $class;

    //getter Method

    function getStudent() : string {
        $student = $this->name + $this->class;
        return $student;
    } 

    //setter Method

    function setStudent($name, $class){
        $this->name = $name ;
        $this->class = $class;
    }

    function printDetails(){
        echo "Student name is $this->name";
        echo "<br>";
     echo " Student class is $this->class";
    }
}

// $student1 = new Student();
$student1->setStudent("Laurent", "Year 1");
$student1->printDetails();
?>