<?php
class Study{
    private $id;
    private $name;
    private $class;

    public function setStudent($id, $name, $class){
        $this->id = $id;
        $this->name = $name;
        $this->class= $class;

    }
    public function getStudent() :string{
        return"$this->name who has an id of $this->id and studies in $this->class";
    }
}

$student1 = new Study();
$student1->setStudent(2345 , "Irakarama Laurent", 'Year 1');
echo $student1->getStudent();