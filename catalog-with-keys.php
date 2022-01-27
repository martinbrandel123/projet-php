<?php

include 'my-functions.php';
$nikeAirMax270 = [
    "name" => "nike Air Max",
    "price" => 190,
    "color" => "blue & red",
    "discount" => 20,
    "picture_url" => "https://www.nike.com/t/air-max-270-mens-shoes-KkLcGR/DQ7625-600",
];


// Affichage



echo '<pre>';
print_r($nikeAirMax270);
echo '</pre>';
print_r(formatPrice($nikeAirMax270["price"]));

?>