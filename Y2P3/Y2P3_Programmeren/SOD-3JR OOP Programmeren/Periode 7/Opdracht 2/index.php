<?php

// Include the class definitions
require_once 'House.php';
require_once 'Room.php';

// Create a new house
$house = new House();

// Create some rooms
$room1 = new Room(5.2, 5.1, 5.5); // width, height, depth
$room2 = new Room(4.8, 4.6, 4.9);
$room3 = new Room(5.9, 2.5, 3.1);

// Add rooms to the house
$house->addRoom($room1);
$house->addRoom($room2);
$house->addRoom($room3);

// Get rooms from the house
$rooms = $house->getRooms();

// Output details of each room
echo "Inhoud Kamers: <br><br>";
foreach ($rooms as $index => $room) {
    echo "* ";
    echo "Lengte: " . $room->getWidth() . "m | ";
    echo "Breedte: " . $room->getHeight() . "m | ";
    echo "hoogte: " . $room->getLength() . "m | ";
    echo "<br>";
}

// Get total volume of the house
$totalVolume = $house->getTotalVolume();
echo "<br>Volume Totaal: " . $totalVolume . "m3<br>";

// Get price of the house
$price = $house->getPrice($totalVolume);
echo "prijs van het huis: " . $price . " Euro<br>";

?>
