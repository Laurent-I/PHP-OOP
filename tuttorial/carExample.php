<?php

require_once ('interface.php');
require_once ('sportsCar.php');
require_once('carModel.php');

$car1 = new SportsCar();
echo "<br>";
$car1->setModel("FERRARI");
echo "Car Model :". $car1->getModel();
echo "<br>";
$car1->applyBreak();
$car1->increaseSpeed();
$car1->decreaseSpeed();
$car1->setModel("FERRARI");

?>