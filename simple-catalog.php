<?php

$products = array("iPhone", "iPad", "iMac");
$productsLastIndex = count($products) - 1;

// Trier le tableau par ordre alphabétique croissant
//sort($products);
//print_r($products);
// Afficher le premier produit de ce tableau
//echo "$products[0]";
// Afficher le dernier produit de ce tableau
//echo $products[$productsLastIndex];

for ($i=0;$i<count($products);$i++){
   echo $products[$i]."<br>";
   if ($products[$i] === "iMac") {
       echo "iMac trouvé !";
   }
}

?>