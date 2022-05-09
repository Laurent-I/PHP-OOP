<?php
class Car{
    public $name = "";
    //How to access properties via Methods

//getter Methods
function getName(): string {
    return $this->name;
}
//setter Methods
function setName($name){
    $this->name = $name;
}
}
$car1 = new Car();
//Example 1 with the Getter and Setter Methods
$car1->setName("BMW");
echo $car1->  getName();
echo "<br>";
//Change Property From Outside
$car1->name = "Ferrari";
echo $car1->getName();
echo "<br>";
//Independent Objects
$car2 = new Car();
$car2->name = "Hyundai";
 echo $car1->getName();
 echo "<br>";
 echo $car2->getName();
?>