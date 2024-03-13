<?php

    class House {
        
        // Attributes
        protected int $floor;
        protected int $rooms;
        protected float $width;
        protected float $height;
        protected float $depth;
        protected int $volume;

        // Constructor
        public function __construct($floor, $rooms, $width, $height, $depth) {
            $this->floor = $floor;
            $this->rooms = $rooms;
            $this->width = $width;
            $this->height = $height;
            $this->depth = $depth;
            $this->setVolume();
        }
        
        // Methods
        public function setVolume() {
            $this->volume = $this->width * $this->height * $this->depth;
        }

        public function getPrice() {
            return "De prijs van het huis is: " . ($this->volume * 1500);
        }

        public function getHouse() {
            return "Dit huis heeft " . $this->floor . " verdiepingen, " . $this->rooms . " kamers en heeft een volume van " . $this->volume . "m3 <br>";        
        }
    }

    $House1 = new House(2, 4, 5, 5, 4);
    $House2 = new House(3, 6, 5, 5, 6);
    $House3 = new House(2, 3, 5, 5, 3);

    echo $House1->getHouse(). $House1->getPrice(). "<br>";
    echo $House2->getHouse(). $House2->getPrice(). "<br>";
    echo $House3->getHouse(). $House3->getPrice(). "<br>";

?>
