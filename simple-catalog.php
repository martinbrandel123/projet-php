<?php

$products = array("iPhone", "iPad", "iMac");
$productsLastIndex = count($products) - 1;

// Trier le tableau par ordre alphabétique croissant
sort($products);
print_r($products);
// Afficher le premier produit de ce tableau
echo "$products[0]";
// Afficher le dernier produit de ce tableau
echo $products[$productsLastIndex];


?>