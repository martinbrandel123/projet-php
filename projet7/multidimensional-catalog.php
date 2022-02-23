<?php
include 'database.php';
include 'my-functions.php';
$products = getQueryData($sqlQueryProducts, $db);

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
    <form action="cart.php" method="POST" style="justify-content: center; display:flex; width: 80%; flex-wrap: wrap; margin: 50px auto;">
        <?php foreach($products as $product) {?>
            <div class="cards"  style="width: 300px; margin: 20px;">
                <div class="card" style="width: 18rem;">
                <img src='<?=$product["image"]?>' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $product["name"] ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prix TTC : <?= formatPrice ($product["price"])?> €</li>
                    <li class="list-group-item">Prix HT : <?= priceExcludingVAT($product["price"]) ?> €</li>
                    <li class="list-group-item">Prix avec reduction : <?= discountedPrice ($product["price"], $product["discount"]) ?> € =><?=$product["discount"]?> % </li>
                </ul>
                <div class="card-body">
                    <input type="number" name="quantity[]" min="1" max="10">
                    <input type="submit" name="ajouter" value="Mon panier">
                </div>
                </div>
            </div>
         <?php } ?>
    </form>
</body>
</html>
<?php


