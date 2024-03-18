<?php
require_once __DIR__ . '/Figure.php';
require_once __DIR__ . '/Square.php';
require_once __DIR__ . '/Triangle.php';
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Circle.php';

use Opdracht3\Circle;

$circle = new Circle("red", 5);
echo $circle->draw(); // Output: A red circle with a radius of 5
?>
