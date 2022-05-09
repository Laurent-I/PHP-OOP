<?php
class Users{
    private $pc;
    private $net;

    function __set($name, $value)
    {
        echo "These are private Variables please: $this->pc and $this->net ";
        echo "<br>";
        
    }
    function __get($name)
    {
        echo "These are not available for you";
    }

    function __call($name, $arguments)
    {
        echo "Dont even bother buddy 🤣😥";
        echo "<br>";
        echo $name ; 
        echo "<br>";
        var_dump($arguments);
        echo "<br>";
    }
    function __toString()
    {
        return "Why are you calling the instance of the class bro!! 🙄";
        echo "<br>";
    }
    function __debugInfo()
    {
        echo "Lets find that sucker bug right buddy and dont stress out u got this 😉💪🏽👉🏽";
    }
}

$user1 = new Users();
$user1->pc = "Dell";
echo "<br>";
echo $user1->pc;
echo "<br>";
$user1->sellPc("I am going to sell this pc", "Hahha this is absurd");
echo "<br>";
echo $user1;
echo "<br>";
var_dump($user1);