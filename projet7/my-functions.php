<?php


function formatPrice (int $priceCents) :int {
    $priceEuro = $priceCents / 100;
    return $priceEuro;
}

function priceExcludingVAT(int $TTCCents) :int {
    $TTCEuro = formatPrice($TTCCents);
    $HTEuro = (100 * $TTCEuro) / (120);
    return $HTEuro;
}

function discountedPrice (int $priceCents, int $discount) :int {
    $priceEuro = formatPrice($priceCents);
    $discountPrice = $priceEuro - ($priceEuro * ($discount / 100));
    return $discountPrice; 
}





function dump($elem) {
    echo "<pre>";
    var_dump($elem);
    echo "</pre>";
}

?>
