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

include 'database.php';
include 'my-functions.php';

$quantity = Null; 
$products_key = Null;

dump($_POST["shoe_1_quantity"]);

    if(isset($_POST["shoe_1_quantity"]) && !empty($_POST["shoe_1_quantity"]) && is_numeric($_POST["shoe_1_quantity"])){
        $quantity = (int) $_POST["shoe_1_quantity"];
        $keys = array_keys($_POST);
        $products_key = substr($keys[1],0,6);
        var_dump($products_key);
    }else {
        echo "Erreur : il faut seulement des chiffres";
        dump($_POST["getGet"]);
    }






if($quantity !== Null){
?>

<table style="width:600px" class="table table-striped table-dark">
  <thead class="thead-dark">
    <tr>
      <th colspan="2" scope="col">Produit</th>
      <th scope="col">Prix unitaire</th>
      <th scope="col">Quantité</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2"><?= $products["shoe_1"]["name"]; ?></td>
      <td>
          <span><?= formatPrice($products[$products_key]["price"])?>€</span> 
          <span> | <?= discountedPrice ($products[$products_key]["price"], $products[$products_key]["discount"]) ?>€</span>
      </td>
      <td><?= $_POST["shoe_1_quantity"]; ?></td>
      <td><?= discountedPrice ($products[$products_key]["price"], $products[$products_key]["discount"], $_POST["shoe_1_quantity"])?>€</td>
    </tr>
    <tr>
      <td colspan="2"></td>
      <td></td>
      <td>Total HT :</td>
      <td></td>
    </tr>
    <tr>
      <td style="text-decoration: underline;" colspan="2">Choix du transporteur</td>
      <td></td>
      <td>TVA :</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <form action="cart.php" method="post">
        <td colspan="2">
            <input type="text" name="transporters" list="transporters">
           <?php foreach($_POST as $product_name => $quantity){
            ?><input type="hidden" name="<?=$product_name?>" value="<?= $quantity ?>"><?php
           }?>
        </td>
        <td><input type="submit"></td>
      </form>
      <td>Total TTC :</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <td style="text-decoration: underline;" colspan="2"></td>
      <td></td>
      <td>Prix & Livraison :</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


<?php
} 
?>







<datalist id="transporters">
  <option value="LaPoste">
  <option value="Colissimo">
</datalist>
</body>
</html>
