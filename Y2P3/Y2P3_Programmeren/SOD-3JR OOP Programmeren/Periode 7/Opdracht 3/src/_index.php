<?php
require_once __DIR__ . '/Figure.php';
require_once __DIR__ . '/Circle.php';
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Square.php';
require_once __DIR__ . '/Triangle.php';

use Opdracht3\Circle;

$figure = new Figure("Yellow");
echo $figure->draw(); // Output: A yellow figure


$circle = new Circle("Red", 5);
echo $circle->draw(); // Output: A red circle with a radius of 5

?>
