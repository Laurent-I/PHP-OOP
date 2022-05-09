<?php

trait DatabaseHelper{

    function getRecords(){
        echo "Here are your records";
    }
}

class Iris{
    use DatabaseHelper;

    function connectDB(){
        $this->getRecords();
    }
}

$iris1 = new Iris();
$iris1->connectDB();
?>