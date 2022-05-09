<?php
class Stu{
    private $id;
    private $name;

    function __set($name, $value)
    {
        echo "Set methods is not found so this is called" ;
echo "<br>";
        echo $name;
        echo $value;
        echo "<br>";
        if($name  == "id"){
            $this->id  =$value;
        }
    }
    function __get($name)
    {
        echo "Get Methods is not found so this is called";
echo "<br>";
        echo $name;
        if($name == "id"){
            echo $this->id;
        }
    }
}

$student1 = new Stu();
$student1->id = "Test";
echo $student1->id ;
?>