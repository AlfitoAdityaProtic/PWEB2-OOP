<?php 
abstract class Shape{
    abstract public function area();
}
class Rectangle extends Shape{
    private $width;
    private $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function area(){
        return $this->width * $this->height;
    }
}
class Circle extends Shape {
    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function area(){
        return pi() * pow($this->radius, 2);
    }
}

// instansiasi objek
$rectangle = new Rectangle(5,10);
echo "Area of Rectangle: " . $rectangle->area();

$circle = new Circle(8);
echo "Area of Circle: " . $circle->area();