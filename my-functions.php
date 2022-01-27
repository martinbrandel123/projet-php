<?php


function formatPrice($price_centimes) {
// affiche le prix en euros 
    $price_euro =  $price_centimes / 100 ; 
    echo $price_euro ."€";
    echo priceExcludingVAT($price_euro);

}

function priceExcludingVAT($TTC) {
    $TVA = 20;
    $HT = (100*$TTC) / (100 + $TVA);
    return " |  Prix HT " .$HT ."€";
}