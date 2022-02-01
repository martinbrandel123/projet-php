<?php



function priceExcludingVAT($price_euro, $quantity = 1) {
    $TVA = 20;  
    $HT = ((100*$price_euro) / (100 + $TVA)) * $quantity;
    return "HT : " .$HT ." €";
}



function discountedPrice($price_euro, $discount = 0, $quantity = 1) {
    $discountedPrice = ($price_euro * ($discount / 100)) * $quantity;
    return $discountedPrice; 
}
function endPrice ($price_euro, $discount, $quantity = 1) {
    return ($price_euro * $quantity) - discountedPrice($price_euro, $discount, $quantity);
}





function dump($elem) {
    echo "<pre>";
    var_dump($elem);
    echo "</pre>";
}

?>
