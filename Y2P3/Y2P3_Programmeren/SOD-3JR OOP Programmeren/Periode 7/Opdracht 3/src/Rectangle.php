<?php
namespace Opdracht3;

class Rectangle extends Figure
{
    // Attributes
    protected int $height;
    protected int $width;

    // Constructor
    public function __construct($color, $height, $width) {
        parent::__construct($color);
        $this->height = $height;
        $this->width = $width;
    }

    // Methods
    public function draw()
    {
        return "Rectangle wordt getekend en heeft een hoogte van ". $this->heigth .", en heeft een breedte van ". $this->width .", en krijgt de kleur " . $this->color;
    }
}
?>
