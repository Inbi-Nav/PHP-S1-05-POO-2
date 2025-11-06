<?php
require_once 'Animal.php';

class Cow extends Animal {
    public function speak() {
        return "I'm " . $this->name . " and I say Moo Moo!";
    }
}
?>