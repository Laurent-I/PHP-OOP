<?php
class Em{
    public $hours = 600;
    public $hoursPrice = 10;

    function calcSalary(){
        return $this->hours * $this->hoursPrice;
    }
//This is overloading and it is not supported by PHP. 
    // function calcSalary($hours, $hoursPrice){
    //     return $this->hours * $this->hoursPrice;
    // }
}