<?php 

class Item 
{
    public string $name;
    public string $description;
    public int $price;
    private string $imageUrl;
    private int $weight;
    private int $stock;
    private bool $available; 

    public function getName(string $name) {

    }

}

$item = new Item;

function displayItem(Item $item) {
    $item->name = "martin";
    $item->description = "bebou JTM";
   // $item->price = "30000";
   // $item->imageUrl = "https://www.sneakers.fr/wp-content/uploads/2022/02/adidas-astir-square-4.jpg";
   // $item->weight = 40000;
   // $item->stock = 10;
   // $item->available = true;
    
   return "<h1>". $item->name . "</h1>"
   ."<h1>". $item->description . "</h1>"
   ."<h4>". $item->price . "</h4>";
}

echo displayItem($item);