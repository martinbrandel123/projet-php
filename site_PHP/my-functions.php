<?php
include 'database.php';

function formatPrice (int $priceCents) :int {
    $priceEuro = $priceCents / 100;
    return $priceEuro;
}

function priceExcludingVAT(int $TTCCents, int $quantity = 1) :int {
    $TTCEuro = formatPrice($TTCCents);
    $HTEuro = ((100 * $TTCEuro) / (120)) * $quantity;
    return $HTEuro;
}

function discountedPrice (int $priceCents, int $discount = 0, int $quantity = 1) :int {
    $priceEuro = formatPrice($priceCents);
    $discountPrice = ($priceEuro - ($priceEuro * ($discount / 100))) * $quantity;
    return $discountPrice; 
}

function getQueryData ($sqlQuery, $db) {
    $productsStatement = $db->prepare($sqlQuery);
    $productsStatement->execute();
    return $productsStatement->fetchAll(PDO::FETCH_ASSOC);
}

function dump($elem) {
    echo "<pre>";
    var_dump($elem);
    echo "</pre>";
}

?>
