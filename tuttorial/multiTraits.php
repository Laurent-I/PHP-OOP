<?php

trait DatabaseHelper{

    function getRecords(){
        echo "Here are your records";
    }
}
trait  stringHelper{

    function removeSpaces($str){
        return trim($str);
    }
}

class Iris{
    use DatabaseHelper;
    use stringHelper;
    function connectDB(){
        $this->getRecords();
        echo "<br>";
        echo $this->removeSpaces("   Irakarama Laurent   ");
    }
}

$iris1 = new Iris();
$iris1->connectDB();
?>