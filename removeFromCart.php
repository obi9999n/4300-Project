<?php
    try {
        $dsn = 'mysql:host=localhost;dbname=project';
        $username = 'root';
        $password = '';
        $db = new PDO($dsn,$username,$password);
        // echo "<p> You are connected to the database!</p>";
        } catch(PDOException $e) {
          $error_message = $e -> getMessage();
          echo "<p> An error occured while connecting to the database: $error_message </p>";
        }

	include("connection.php");

    $product_id = $_GET['productID'];
        
    $query = "delete from cart where productID = $product_id";
    $row=$db->exec($query);
    $query = "UPDATE `products` SET `inCart`='0' WHERE productID = $product_id";
    $row=$db->exec($query);
    $query = "UPDATE `products` SET `stock`='1' WHERE productID = $product_id";
    $row=$db->exec($query);

    header("Location: marketplace.php");
    die;

?> 