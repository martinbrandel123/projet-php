<?php

include 'products.php';
include 'my-function.php';

var_dump($products["shoe_1"]["name"]);



?>


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
    <form action="cartValide.php" method="post">
        <div class="card" style="width: 18rem;">
        <img src="image/shoe_1.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $products["shoe_1"]["name"] ?></h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Prix TTC :<?= formatPrice ($products["shoe_1"]["price"])?> €</li>
            <li class="list-group-item">Prix HT :<?= priceExcludingVAT($products["shoe_1"]["price"]) ?> €</li>
            <li class="list-group-item">Prix avec reduction : <?= discountedPrice ($products["shoe_1"]["price"], $products["shoe_1"]["discount"]) ?> €</li>
        </ul>
        <div class="card-body">
            <input type="number" name="shoe_quantity" min="0" max="10">
            <button type="submit">Voir Mon Pannier</button>
        </div>
        </div>
    </form>
</body>
</html>
<?php



