<?php
class Doctors{
    function calcSalary($hours){
        return 10 * $hours;
    }
}

class Specialist extends Doctors{
    function calcSalary($hours){
        return 35 * $hours;
    }
}

$doctor1 = new Doctors();
echo "Doctor Salary is: ".$doctor1->calcSalary(4). " dollars";
echo "<br>";

$specialist1 = new Specialist();
echo "Specialist Salary is: ". $specialist1->calcSalary(4). " dollars";

?>

