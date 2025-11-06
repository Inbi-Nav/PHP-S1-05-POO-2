<?php
require_once 'Animal.php';

class Bird extends Animal {
    public function speak() {
        return "I'm " . $this->name . " and I say Pio Pio!";
    }
}
?>