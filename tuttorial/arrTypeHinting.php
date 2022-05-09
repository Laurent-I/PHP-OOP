<?php
declare(strict_types = 1);

class Bellamy{

    private $name;
    function getName() : string{
        return $this->name;
    }
    function setName(string $name) :void{
        $this->name = $name ;
    }
}

class Tash extends Bellamy {
    private $studentId  = " "; 
    private $studentName = "";
    function setDetails(array $students) : void{
        $this->studentId = $students['id'];
        $this->studentName = $students['name'];
    }
}

$bellamy1 = new Bellamy();
$bellamy1->setName("Dan");
echo $bellamy1->getName();
echo "<br>"; 
$tash1 = new Tash();
$student = ['id'=> 234, 'name'=> "Laurent"];
$tash1->setDetails($student);
print_r($tash1);
