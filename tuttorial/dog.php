<?php
class Dog{
    private $color;
    private $breed; 

    function dogBark(){
        echo "Woof! Woof <br>".PHP_EOL;
    }
    function getColor() : string{
        return $this->color;
    }
    function setColor($color){
        return $this->color = $color;
    }
    function getBreed() : string{
        return $this->breed;
    }
    function setBreed($breed){
        return $this->breed = $breed;
    }

    function dogSleep(){
        echo "ZZZZZZZZzzzzzzzzzz <br>".PHP_EOL;  
    }
}

$dog1 = new Dog();
//Access the properties Directly
$dog1->setcolor("Black");
$dog1->setbreed("Shepard") ;

//Call Methods
$dog1->dogBark();
$dog1->dogSleep();

?>