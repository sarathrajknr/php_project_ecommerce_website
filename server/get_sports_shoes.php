<?php 

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM products WHERE product_id BETWEEN 13 AND 16 ");

$stmt->execute();



$sports_shoes = $stmt->get_result();//[]


?>