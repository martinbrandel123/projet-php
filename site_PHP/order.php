


<?php

include 'database.php';
include 'my-functions.php';
$products = getQueryData($sqlQueryProducts, $db);

?>

<h1>felicitation pour votre achat  ! DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD</h1>

<?php
if(isset($_POST['Acheter'])){
        $sqlQueryInsertOrder = 'INSERT INTO orders (number,date,customer_id) VALUES (100345112, CURRENT_DATE, 1)';
        $sqlInsertOrder = $db->prepare($sqlQueryInsertOrder);
        $sqlInsertOrder->execute();
        $order_id = $db->lastInsertId();
    foreach($_POST["quantity"] as $key => $quantity){

        if(isset($quantity) && !empty($quantity) && is_numeric($quantity)){
            $product_id = $key + 1;
          //  echo "ID produit ".$product_id;
          //  echo "   ||| quantity ; ".$quantity ."<br>";
                        // Ecriture requête
                        $sqlQuery = 'INSERT INTO order_product(quantity, product_id, order_id) VALUES (:quantity, :product_id, :order_id)';
                        //Préparation
                        $insertQuantity = $db->prepare($sqlQuery);
                        //Execution 
                        $insertQuantity->execute([
                            'quantity' => $quantity,
                            'product_id'=>$product_id,
                            'order_id'=> $order_id
                        ]);
        }
    }
}
else {
    echo "ERREUR ==> validation de la commande <==";
}

?>
