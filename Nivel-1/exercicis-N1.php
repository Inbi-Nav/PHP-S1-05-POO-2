<?php
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