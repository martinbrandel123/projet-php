<?php 

include 'products.php';
include 'my-function.php';

?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h2 class="card-title"><?= $products["shoe_1"]["name"]; ?></h2>
            <p><?= $_POST["shoe_quantity"] ?> articles Commander </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Prix unitaire TTC : <?= formatPrice($products["shoe_1"]["price"]) ?> €</li>
            <li class="list-group-item">Prix HT : <?= priceExcludingVAT($products["shoe_1"]["price"], $_POST["shoe_quantity"]) ?> €</li>
            <li class="list-group-item">Prix avec reduction :<?= discountedPrice ($products["shoe_1"]["price"], $products["shoe_1"]["discount"], $_POST["shoe_quantity"]) ?>  €</li>
        </ul>
    </div>

