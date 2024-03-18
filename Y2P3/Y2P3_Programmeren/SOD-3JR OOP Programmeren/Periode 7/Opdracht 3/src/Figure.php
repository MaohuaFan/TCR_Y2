<?php
namespace Opdracht3;

class Figure
{
    // Attributes
    protected string $color;

    // Constructor
    public function __construct($color) {
        $this->color = $color;
    }

    // Methods
    public function getColor() {
        return $this->color;
    }

    public function draw()
    {
        return "A " . $this->color . " figure";
    }
}
?>
