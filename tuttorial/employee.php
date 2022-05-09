<?php

class Employee{

    private $id;
    private $name;
    private $workingHoursPerDay = 8;
    private $hourlyRate = 15;
    private $totalLeaveTaken;
    private $workingDays;
function __construct($id, $name, $totalLeaveTaken)
{
    $this->id = $id;
    $this->name = $name;
    $this->totalLeaveTaken = $totalLeaveTaken;
}
    function getSalaryAmount($totaldays) : int{
        //$this is a special variable used to access class properties.
        $this->workingDays = $totaldays - $this->totalLeaveTaken;
        $salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
        return $salary;
    }
    function getName(){
        return $this->name;
    }
    function getWorkingDays(){
        return $this->workingDays;
    }
    function getTotalLeaveTaken(){
        return $this->totalLeaveTaken;
    }

}

$emp1 = new Employee(12345, "Irakarama Laurent", 4);
$salary  = $emp1->getSalaryAmount(20);

echo $emp1-> getName() ." has worked for ". $emp1->getWorkingDays(). " days and taken ". $emp1->getTotalLeaveTaken().  " leaves. <br>".PHP_EOL;
echo $emp1->getName(). " salary is $salary dollars.".PHP_EOL;