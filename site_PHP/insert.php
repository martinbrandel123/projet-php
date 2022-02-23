<?php 

include 'database.php';
include 'my-functions.php';
$products = getQueryData($sqlQueryProducts, $db);
// ecriture de la requete
//$query = 'INSERT INTO tabletest (quantity) VALUES (:quantity)' ;

// Préparation
//$insertQuantity = $db->prepare($query);

// Exécution la quantity est maintenant dans la base de données
//$insertQuantity->execute([
//    'quantity' => 4
//]);



for($i=0;$i<count($_POST['quantity']);$i++){
    if(isset($_POST['ajouter'])){
      $sqlInsert = "INSERT INTO order_product(quantity, product_id) VALUES (:quantity, :product_id)";
        $sql_insert = $db->prepare($sqlInsert);
        $sql_insert->execute([
            'quantity' => $quantity[$i],
            'product_id' => 
        ]);
    }
  };
}




?>