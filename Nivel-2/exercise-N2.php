<?php
interface Shape {
    public function calculateArea();
}

class Triangle implements Shape {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea() {
        return ($this->width * $this->height) / 2;
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea() {
        return ($this->width * $this->height);
    }
}

class Circle implements Shape {
      protected $radius;
      
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea() {
        return $this->radius * $this->radius * pi();
    }
}

$Circle = new Circle(3);
$Triangle = new Triangle(9,6);
$Rectangle = new Rectangle(7,5);

echo "Area del circulo es: " . number_format($Circle -> calculateArea(), 2);
echo '<br />';
echo "Area del triangulo es: " . $Triangle -> calculateArea();
echo '<br />';
echo "Area del  rectangulo es: " . $Rectangle -> calculateArea();
?>
