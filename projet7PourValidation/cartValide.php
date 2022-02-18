<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php 

include 'products.php';
include 'my-function.php';

$quantity = Null; 
$products_key = Null;


if(isset($_POST["shoe_1_quantity"]) && !empty($_POST["shoe_1_quantity"]) && is_numeric($_POST["shoe_1_quantity"])){
    $quantity = (int) $_POST["shoe_1_quantity"];
    $keys = array_keys($_POST);
    $products_key = substr($keys[0],0,6) ;
}else {
    echo "Erreur : il faut seulement des chiffres";
}

dump($quantity);

if($quantity !== Null){
?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-title"><?= $products["shoe_1"]["name"]; ?></h4>
            <p>Vous avez commandez <?= $_POST["shoe_1_quantity"] ." ".$products["shoe_1"]["name"] ;?></p>
        </div>
        
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Prix unitaire TTC : <?= formatPrice($products[$products_key]["price"]) ?> €</li>
            <li class="list-group-item">Prix HT : <?= priceExcludingVAT($products[$products_key]["price"], $quantity) ?> €</li>
            <li class="list-group-item">Prix avec reduction TTC:<?= discountedPrice ($products[$products_key]["price"], $products[$products_key]["discount"], $quantity) ?>  €</li>
        </ul>
    </div>

<?php
} 
?>

</body>
</html>

