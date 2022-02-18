
<?php

include 'database.php';
var_dump($_POST);
echo "<br>";

$test = (implode(" ",$_POST));



?>
<form action="carte.php" method="post">
    <input type="text" name="shoe_1" min="1" max="10">
    <input type="hidden" name="quantity_value" value="<?= $test ?>">
    <input type="submit">
</form>