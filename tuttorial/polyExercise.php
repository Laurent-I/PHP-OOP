<?php
interface Animal{
    function makeSound();
}

class Dog implements Animal{
    function makeSound()
    {
        echo "Dog Barks".PHP_EOL;
    }
}

class Cat implements Animal{
    function makeSound()
    {
        echo "Cat Purrs".PHP_EOL;
    }
}