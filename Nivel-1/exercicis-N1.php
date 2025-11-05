<?php

use LDAP\Result;

abstract class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    abstract public function hablar();
}
Class Pato extends Animal {
    public function hablar() {
        echo "Soy " . $this->nombre . " hago Quack Quack!<br>";
    }
}
Class Vaca extends Animal {
    public function hablar() {
        echo "Soy " . $this->nombre . " hago Muu Muu!<br>";
    }
}
Class Pajaro extends Animal {
    public function hablar() {
        echo "Soy " . $this->nombre . " hago Pio Pio!<br>";
    }
}

$Toby = new Pato("Toby");
$Lola = new Vaca("Lola");
$Milly = new Pajaro("Milly");
echo $Toby->hablar();
echo "<br>";
echo $Lola->hablar();
echo "<br>";
echo $Milly->hablar();
?>


<h1 style="color: darkblue;"> Exercise 2 Nivel l</h1>
<?php
abstract class  Shape  {
        protected $height;
        protected $width;

        public function __construct($height, $width){
        $this->height = $height;
        $this->width = $width;        
    }
    abstract public function calculateArea();

}
class Triangle extends Shape {
    public function calculateArea(){
          return ($this->width * $this->height) / 2;  
    }
}
class Rectangle extends Shape {
    public function calculateArea(){
          return ($this->width * $this->height);  
    }
}

$Triangle = new Triangle(4, 3);
$Rectangle = new Rectangle(18, 31);

echo "Area del  triangulo es: " .  $Triangle->calculateArea();
echo '<br />';
echo "Area del rectanglo es: " . $Rectangle->calculateArea();
?>