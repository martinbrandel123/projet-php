<?php



try
{
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'martin', 'azerty',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$sqlQueryProducts = 'SELECT * FROM products';
$sqlQuery_2 = 'SELECT * FROM products WHERE quantity = 0';
$sqlQuery_3 = 'SELECT * FROM orders WHERE date > CURRENT_DATE - INTERVAL 10 day';
$sqlQuery_4 = 'SELECT orders.number,SUM(products.price * order_product.quantity) AS total
                FROM orders
                        JOIN order_product ON order_product.order_id = orders.id
                        JOIN products ON order_product.product_id = products.id
                GROUP BY orders.number
                HAVING total >= 100 AND total <= 550';
$sqlQuery_5 = 'SELECT orders.number, SUM(products.price*order_product.quantity) AS total
                FROM orders
                        JOIN order_product ON order_product.order_id = orders.id
                        JOIN customers ON orders.customer_id = customers.id
                        JOIN products ON order_product.product_id = products.id
                WHERE customers.first_name = "Charlize"
                GROUP BY orders.number';
$sqlQuery_6 = 'DELETE FROM customers 
                WHERE customers.id NOT IN (SELECT customer_id FROM orders);';



?>




