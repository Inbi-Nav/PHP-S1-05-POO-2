
<h1 style="color: darkblue;"> Exercise 2 Nivel l</h1>
<?php
require_once 'Triangle.php';
require_once 'Rectangle.php';

$Triangle = new Triangle(4, 3);
$Rectangle = new Rectangle(18, 31);

echo "Area del  triangulo es: " .  $Triangle->calculateArea();
echo '<br />';
echo "Area del rectanglo es: " . $Rectangle->calculateArea();
?>