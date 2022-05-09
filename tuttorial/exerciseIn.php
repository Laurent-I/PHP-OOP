<?php
// class Animal{
//     public $name;
//     public $isHunting;
//     function __construct($name, $isHunting)
//     {
//         $this->name = $name;
//         $this->isHunting = $isHunting;
//         if($this->isHunting){
//             echo "$this->name does Hunting Okay!!🐅";
//         }else{
//             echo "$this->name doesn't hunt okay🐕";
//         }
//     }
//     function doesHunting(){

//     }
// }
// class Dog extends Animal{
//     public $name;
//     public $sound;
//     function __construct($name, $sound, Animal $animal)
//     {
//         $this->name = $name;
//         $this->sound = $sound;

//         $this->isHunting = $animal->$this->isHunting;
//     }
//     function makeSound(){
//         echo "$this->name🐕 $this->sound";
//     }
// }
// class Tiger extends Animal{
//     public $name;
//     public $sound;
//     function __construct($name, $sound, Animal $animal)
//     {
//         $this->name = $name;
//         $this->sound = $sound;

//         $this->isHunting = $animal->$this->isHunting;
//     }
//     function makeSound(){
//         echo "$this->name🐅 $this->sound";
// }
// }

// $dog = new Dog('luffy','Barks', $animal );

use Dog as GlobalDog;

class Animal{
    protected $name;
    protected $hunt = false;

    function doesHunting(){
        if($this->hunt){
            echo "Yes, $this->name hunts <br>". PHP_EOL;
        }else{
            echo "No, $this->name doesn't hunt <br>". PHP_EOL;
        }
    }
}
class Dog extends Animal{
    function __construct($name, $hunt)
    {
        $this->name = $name;
        $this->hunt = $hunt;
    }

    function makeSound(){
        echo "Woof! Woof! 🐕🐕 <br>". PHP_EOL;
    }
}

class Tiger extends Animal{
    function __construct($name, $hunt)
    {
        $this->name = $name;
        $this->hunt = $hunt;
    }
    function makeSound(){
        echo "Grrr! Grrr! 🐅🐅 <br>". PHP_EOL;
    }
}

$dog1 = new Dog("Luffy", false);
$dog1->doesHunting();
$dog1->makeSound();


$tiger1 = new Tiger("Dan", true);
$tiger1->doesHunting();
$tiger1->makeSound();

?>