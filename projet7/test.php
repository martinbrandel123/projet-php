<?php
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
    <form action="test2.php" method="POST">
       <?php for($i=0;$i<4;$i++){ ?>
            <input type="number" name="quantity[]">
            <input type="submit" name="ajouter" value="coucou">
        <?php } ?>
    </form>
</body>
</html>
<?php