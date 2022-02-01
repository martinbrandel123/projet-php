<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
include 'my-functions.php';
include 'products.php';

?>



<form method="post" action="cart.php">
    <div class="shoe_container">
    <?php 
    foreach($products as $shoe_name => $shoe_caracteristiques) {
        $weight_shoe = $shoe_caracteristiques["weight"];
        $name_shoe = $shoe_caracteristiques["name"];
        $img_shoe = $shoe_caracteristiques["picture_url"];
        $price_shoe = $shoe_caracteristiques["price"];
        $discount_shoe = $shoe_caracteristiques["discount"];?>

        <div class='shoe_card'>
        <?php
            echo "<h3> {$shoe_caracteristiques["name"]} </h3>";
            echo "<img src='$img_shoe' alt='' class='image_container'>";
            echo "<p>Prix : $price_shoe €</p>";
            ?>
            <p>Reduction : <?= discountedPrice($price_shoe, $discount_shoe); ?> €</p>
            <p>Prix avec reduction: <?= endPrice($price_shoe, $discount_shoe); ?> €</p>
            <?php
            echo "<input type='number' min='0' max='10' name='{$shoe_name}[]'>";
            echo "<input type='hidden' name='{$shoe_name}[]' value='$price_shoe'>";
            echo "<input type='hidden' name='{$shoe_name}[]' value='$discount_shoe'>";
            echo "<input type='hidden' name='{$shoe_name}[]' value='$name_shoe'>";
            echo "<input type='hidden' name='{$shoe_name}[]' value='$weight_shoe'>";
        ?>
        <button type="submit">Mon panier</button>
        </div>
        <?php
    }   
?>
    </div>
</form>



<br>









</body>
</html>


