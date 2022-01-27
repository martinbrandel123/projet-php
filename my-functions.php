<?php


function formatPrice($price_centimes, $discount = 0) {
// affiche le prix en euros 
    $price_euro =  $price_centimes / 100 ; 
    echo $price_euro ."€";
    echo priceExcludingVAT($price_euro);
    echo displayDiscountedPrice($price_euro, $discount);
}

function priceExcludingVAT($price_euro) {
    $TVA = 20;
    $HT = (100*$price_euro) / (100 + $TVA);
    return " |  Prix HT " .$HT ."€";
}

function displayDiscountedPrice($price_euro, $discount = 0) {

    // Prix du produit – (Prix du produit X Pourcentage de remise)
    $discountedPrice = $price_euro * ($discount / 100);
    return "|   ". $discountedPrice ."€ de remise"; 
}