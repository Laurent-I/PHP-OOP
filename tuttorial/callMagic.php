<?php
class Law{
    function __call($name, $arguments)
    {
        echo $name;
        echo "<br>";
        var_dump($arguments);
    }
}

$law1  = new Law();
$law1->createLaw("Irakarama Laurent", "Edeng");