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
        return "A " . $this->color . " circle with a radius of " . $this->length;
    }
}
?>
