<?php

class Product {
    
    // Attributes
    protected array $rooms = [];

    // Constructor
    public function __construct() {
        // Optionally, you can initialize attributes here
    }

    // Method to add a room to the house
    public function addRoom(Room $room){
        $this->rooms[] = $room;
    }

    // Method to get all rooms in the house
    public function getRooms(){
        return $this->rooms;
    }

    // Method to calculate total volume of all rooms in the house
    public function getTotalVolume(){
        $totalVolume = 0;
        foreach ($this->rooms as $room) {
            $totalVolume += round($room->getVolume());
            #echo $totalVolume;
            #echo"<br><br>";
        }
        return $totalVolume;
    }

    // Placeholder method for calculating house price
    public function getPrice($totalVolume){
        return $totalVolume*2980;
    }
}

?>
