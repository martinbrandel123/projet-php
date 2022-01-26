<?php

$products = [
    "nikeAir270" => [
        "name" => "nikeAir270",
        "price" => 170,
        "weight" => 100,
        "discount" => 20,
        "picture_url" => "pictureofshoenikeair.png",
    ],
    "niketerre270" => [
        "name" => "niketerre270",
        "price" => 270,
        "weight" => 220,
        "discount" => 55,
        "picture_url" => "pictureofshoenikeair.png",
    ],
    "nikefeu270" => [
        "name" => "nikefeu270",
        "price" => 666,
        "weight" => 62,
        "discount" => 10,
        "picture_url" => "pictureofshoenikeair.png",
    ],
];


  foreach($products as $key => $shoes) {
      echo "Model ".$key."<br>";
      foreach($shoes as $shoe) {
          echo $shoe."<br>";
      }
      echo "<hr>";
  }
?>