<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="cv.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include 'header.php';
    $nom = "martin";
    $prix = " 3500€";
    $image = "image/shoe_1.PNG";
    echo "$nom";
    echo "$prix";
    echo "<img src='$image' alt=''>";
    include 'footer.php';
?>

</body>
</html>

