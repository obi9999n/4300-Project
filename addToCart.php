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
    $alreadyInQuery = "select * from cart where productID = $product_id limit 1";
    $rows = mysqli_query($con, $alreadyInQuery);
    $numOfRows = mysqli_num_rows($rows);
    $error = 0;

    if ($numOfRows >= 1) {
        $error = 1;
    } else {
        $query = "INSERT INTO cart(productID) VALUES ($product_id);";
        $row=$db->exec($query);
        $query = "UPDATE `products` SET `inCart`='1' WHERE productID = $product_id";
        $row=$db->exec($query);
        $query = "UPDATE `products` SET `stock`='0' WHERE productID = $product_id";
        $row=$db->exec($query);
    }

    header("Location: marketplace.php");
    die;

?> 