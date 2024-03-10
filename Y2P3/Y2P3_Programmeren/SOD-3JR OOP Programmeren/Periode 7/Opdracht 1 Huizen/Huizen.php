<?php

    class House {

        // Attributes
        protected int $floor;
        protected int $rooms;
        protected float $width;
        protected float $height;
        protected float $depth;

        // Constructor
        public function __construct($floor, $rooms, $width, $height, $depth)
        {
            $this->floor = $floor;
            $this->rooms = $rooms;
            $this->width = $width;
            $this->height = $height;
            $this->depth = $depth;
        }

        public function __construct($volume)
        {            
            $this->volume = ;
        }
    }

    // Methods
    public function setVolume($volume) {
        protected int $volume = $width * $height * $depth;
        $this->volume = $volume;
    }

    public function getHouse() {

    }

    public function getPrice() {

    }

    $House1 = new House('2','4','2');
    
    $john->age = 30;
    #$john->age = 15;

    var_dump($john);



?>