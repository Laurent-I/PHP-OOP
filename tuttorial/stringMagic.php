<?php
class Eden{
    function __toString() :string
    {
        return "To string method is called";
    }
}

$eden1 = new Eden();
echo $eden1;
echo "<br>";
var_dump($eden1);