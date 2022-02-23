<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

include 'database.php';
include 'my-functions.php';
$products = getQueryData($sqlQueryProducts, $db); // tableaux des produits 
$totalPrice = 0; // prix total de chaques commandes

?> 

<form action="order.php" method="POST"> 
<h2>Votre panier</h2>

<?php foreach($_POST["quantity"] as $key => $quantity){
  if(isset($quantity) && !empty($quantity) && is_numeric($quantity)){
    $product = $products[$key];
  ?>
    <div style="background:lightblue; display:flex ; margin: 1px; align-items:center;">
      <div>
        <img src='<?=$product["image"]?>' class="card-img-top" alt="..." height="100px">
      </div>
      <div>
        <h4><?=" Quantité : " .$quantity?></h4> 
        <h5><?="Prix : " . discountedPrice($product["price"], $product["discount"],$quantity) . " €";?></h5>
        <h5><?="ID de l'article : " . $key + 1;?></h5>
      </div>
    </div> 
  <?php
  $totalPrice += discountedPrice($product["price"], $product["discount"],$quantity);
  } // creation input hidden pour donner quantity au POST suivant 
  ?> 

  <input type="hidden" name="quantity[]" value="<?= $quantity ?>">
  
  <?php

}?>
 <div style="display:flex; flex-direction:column; align-items:center;">
      <?= "Montant Total de votre commande " . $totalPrice. " €";  ?>
      <input type="submit" name="Acheter" value="Acheter"> 
 </div>

</form>

</body>
</html>
