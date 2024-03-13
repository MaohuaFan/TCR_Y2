<?php

class Room {
    
    // Attributes
    protected float $width;
    protected float $height;
    protected float $depth;

    // Constructor
    public function __construct($width, $height, $depth) {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }
    
    // Methods
    public function getHeight() {
        return $this->height;
    }
    public function getWidth() {
        return $this->width;
    }
    public function getLength() {
        return $this->depth;
    }

    public function getVolume() {
        return $this->width * $this->height * $this->depth;
    }
}

?>
