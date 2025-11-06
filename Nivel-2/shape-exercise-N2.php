<?php
require_once 'Circle.php';
require_once 'Triangle.php';
require_once 'Rectangle.php';

       $circle = new Circle(3);
$triangle = new Triangle(9, 6);
$rectangle = new Rectangle(7, 5);

echo '<br>';
echo '<strong>Circle Area:</strong> ' . number_format($circle->calculateArea(), 2);
echo '</div>';
echo '<br>';
echo '<strong>Triangle Area:</strong> ' . number_format($triangle->calculateArea(), 2);
echo '</div>';
echo '<br>';
echo '<strong>Rectangle Area:</strong> ' . number_format($rectangle->calculateArea(), 2);
echo '</div>';
?>