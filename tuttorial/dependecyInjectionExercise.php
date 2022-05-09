<?php

class UN{
    public $unName;

    function __construct($unName){
        $this->unName = $unName;
    }
}

class St extends UN{
    public $stName;

    function __construct($stName , UN $un)
    {
        $this->stName = $stName;
        $this->unName  = $un->unName;
    }
}

$un  = new UN("Tokyo University");
$st = new St("Irakarama Laurent", $un);

echo "University Name: $st->unName <br>". PHP_EOL;
echo "Student Name: $st->stName". PHP_EOL;

?>
