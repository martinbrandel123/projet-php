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
$products = [
    "shoe_1" => [
        "name" => "nikeAir270",
        "price" => 15000,
        "weight" => 100,
        "discount" => 20,
        "picture_url" => "image/shoe_1.PNG",
    ],
    "shoe_2" => [
        "name" => "niketerre270",
        "price" => 15000,
        "weight" => 220,
        "discount" => 50,
        "picture_url" => "image/shoe_2.PNG",
    ],
    "shoe_3" => [
        "name" => "nikefeu270",
        "price" => 30000,
        "weight" => 62,
        "discount" => 10,
        "picture_url" => "image/shoe_3.PNG",
    ],
];

?>
<form methode="post">
    <div class="shoe_container">
    <?php 
    foreach($products as $shoe_name => $shoe_caracteristiques) {
        $img_shoe = $shoe_caracteristiques["picture_url"];
        echo "<div class='shoe_card'>";
        echo "<h3> {$shoe_caracteristiques["name"]} </h3>";
        echo "<img src='$img_shoe' alt='' class='image_container'>";
        formatPrice($shoe_caracteristiques["price"], $shoe_caracteristiques["discount"]);
        echo "<input type='number' value='0' min='0' max='10' name='quantity_$shoe_name'>";
        echo "<input type='submit'>"; 
        echo "</div>";
    }
    var_dump($_POST);
    ?>
    </div>
</form>




<br>









</body>
</html>


