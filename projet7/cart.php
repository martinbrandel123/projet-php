<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>Document</title>
</head>
<body>




<?php
include 'products.php';
include 'my-functions.php';


    $shoeQuantity = $_POST;
//$totalPrice = 0; 
    $totalQuantity = 0;
?>
    <div class="basket_wrapper">
<?php
foreach($shoeQuantity as $key => $value){
    if (preg_match('~[0-9]+~', $shoeQuantity[$key][0]) === 1 && isset($shoeQuantity[$key][0])){
            $name = $value[3];
            $quantity = (int)$value[0];
            $price = $value[1];
            $discount = $value[2];
            $totalQuantity += $quantity;
            //$totalPrice += endPrice($price, $discount, $quantity);
        ?>
        <div class="basket">
            <div class="basket_product"><?=  $name; ?></div>
            <div>Quantité : <?= $quantity ; ?></div>
            <div>Prix unitaire TTC : <?= $price . " €"; ?></div>
            <div>Prix TTC : <?= $price * $quantity . " €"; ?></div>
            <div>Reduction Total : <?=  discountedPrice($price, $discount,  $quantity)?> €</div>
            <div>Prix Total : <?=  endPrice($price, $discount, $quantity)?> €</div>
            <br>
        </div>
        <?php
        }
}


//Qecho $totalPrice;
?>
    </div>





</body>
</html>
