
<?php
require_once 'Duck.php';
require_once 'Cow.php';
require_once 'Bird.php';

$duck = new Duck("Donald");
$cow = new Cow("Daisy");
$bird = new Bird("Tweety");

echo "<strong>" . $duck->speak() . "</strong>";
echo "<br>";
echo "<strong>" . $cow->speak() . "</strong>";
echo "<br>";
echo "<strong>" . $bird->speak() . "</strong>";
?>