<?php
namespace Opdracht4;

class ProductList
{
    // Attributes
    protected array $product = [];

    // Method to add a room to the house
    public function addProduct(Product $product){
        $this->product[] = $product;
    }

    // Method to get all rooms in the house
    public function getProducts(){
        return $this->product;
    }
}

?>
