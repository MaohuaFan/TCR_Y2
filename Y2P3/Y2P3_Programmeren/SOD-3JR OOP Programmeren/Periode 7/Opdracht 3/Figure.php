<?php
namespace Opdracht3;

class Figure
{
    // Attributes
    protected string $color;

    // Constructor
    public function __construct($color) {
        echo'New Figure wordt aangemaakt en krijgt een kleur';
        $this->color = $color;
    }

    // Methods
    public function getColor() {
        return $this->color;
    }

    public function draw()
    {
        return "A Figure wordt getekend en krijgt de kleur " . $this->color;
    }
}
?>
