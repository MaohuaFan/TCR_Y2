<?php
namespace Opdracht3;

class Circle extends Figure
{
    // Attributes
    protected int $length;

    // Constructor
    public function __construct($color, $length) {
        parent::__construct($color);
        $this->length = $length;
    }

    // Methods
    public function draw()
    {
        return "Cricle wordt getekend en heeft een diameter van ". $this->length .", en krijgt de kleur " . $this->color;
    }
}
?>
