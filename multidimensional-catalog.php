<?php
include 'my-functions.php';
$products = [
    "nikeAir270" => [
        "name" => "nikeAir270",
        "price" => 170,
        "weight" => 100,
        "discount" => 20,
        "picture_url" => "nikeAir270.png",
    ],
    "niketerre270" => [
        "name" => "niketerre270",
        "price" => 270,
        "weight" => 220,
        "discount" => 55,
        "picture_url" => "niketerre270.png",
    ],
    "nikefeu270" => [
        "name" => "nikefeu270",
        "price" => 1000,
        "weight" => 62,
        "discount" => 10,
        "picture_url" => "nikefeu270.png",
    ],
];

foreach($products as $key => $shoes) { 
    formatPrice($shoes["price"], $shoes["discount"]);
      echo "<hr>";
  }
?>