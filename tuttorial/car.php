<?php

class Car{
    public $name;
    public $color;

    function helloClass(){
        echo "Hello from car Class   ". PHP_EOL;
    }
}
$car1 = new Car();
$car1->name = "Ferrari";
$car1->color = " Red";
$car1->helloClass();
echo " $car1->name is $car1->color Color". PHP_EOL;

$car2 = new Car();
$car2->name = "BMW";
$car2->color = " Blue";
$car2->helloClass();
echo " $car2->name is $car2->color Color". PHP_EOL;
?>