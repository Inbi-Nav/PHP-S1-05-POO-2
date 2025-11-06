<?php
require_once 'Animal.php';

class Duck extends Animal {
    public function speak() {
        return "I'm " . $this->name . " and I say Quack Quack!";
    }
}
?>