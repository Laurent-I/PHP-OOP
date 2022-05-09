<?php


require_once('interface.php');
require_once('carModel.php');

class SportsCar implements Car, CarModel{
    public $model;
    public function applyBreak()
    {
        echo "Applying Break <br>" . PHP_EOL;
    }
    public function increaseSpeed()
    {
        echo " Increasing Speed <br>". PHP_EOL;
    }
    public function decreaseSpeed()
    {
        echo "Decreasing Speed <br>". PHP_EOL;
    }
    public function setModel($model){
    $this->model = $model;
    }
    public function getModel():string{
    return $this->model;
    }
}
?>