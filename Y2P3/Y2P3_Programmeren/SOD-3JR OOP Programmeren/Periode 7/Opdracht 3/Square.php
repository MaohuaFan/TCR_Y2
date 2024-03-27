<?php
namespace Opdracht3;

class Square extends Figure
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
        return "Square wordt getekend en heeft een diameter van ". $this->length .", en krijgt de kleur " . $this->color;
    }
}
?>
