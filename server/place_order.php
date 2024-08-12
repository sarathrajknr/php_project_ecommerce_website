<?php

session_start();

include('connection.php');


if (isset($_POST['place_order'])) {
   


    // Retrieve user info from POST request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $order_cost = $_SESSION['total'];
    $order_status = "on_hold";
    $user_id = 1; 
    $order_date = date('Y-m-d H:i:s');

    // Prepare SQL statement to insert order
    $stmt = $conn->prepare("INSERT INTO orders (order_cost, order_status, user_id, user_phone, user_city, user_address, order_date) VALUES (?, ?, ?, ?, ?, ?, ?)");

    

    // Bind parameters to the SQL query
    $stmt->bind_param('isiisss', $order_cost, $order_status, $user_id, $phone, $city, $address, $order_date);

    // Execute the statement
    $stmt->execute();
       

    // Retrieve the inserted order ID
    $order_id = $stmt->insert_id;

    // Output the order ID
    echo $order_id;



    //2. Get products from the cart 

    

   
}

?>
