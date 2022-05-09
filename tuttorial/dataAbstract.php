<?php
abstract class Shape{

    protected $color;
    abstract function calcArea();
    public function getColor(){
        return $this->color;
    }

}

class Rectangle extends Shape{
    public $length;
    public $breadth;
    function __construct($color , $length , $breadth)
    {
        $this->length = $length;
        $this->breadth = $breadth;
        $this->color = $color;
    }
    function calcArea()
    {
        return $this->length * $this->breadth;
    }
}

class Circle extends Shape{
    // public $length;
    public $radius;
    function __construct($color , $radius)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    function calcArea()
    {
        return ($this->radius* $this->radius) * 3.14;
    }
}

$rectangle1 = new Rectangle('red', 24 , 34);
echo "The area of the rectangle is :". $rectangle1->calcArea();
echo "<br>";
echo  "A ".$rectangle1->getColor(). " rectangle";
echo "<br>";

$circle1 = new Circle('blue', 22);
echo "The Area of the circle is :". $circle1->calcArea();
echo "<br>";
echo "A ".$circle1->getColor(). " circle";
echo "<br>";