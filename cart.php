<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
</head>
<body>
    <h1>Your Cart</h1>

    <?php
    //Check for cart and confirm it has items
    if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
        echo "<p>Your cart is empty.</p>";
    }   else {
        // show items in cart
        echo "<table border='1'>";
        echo "<tr><th>Item</th><th>Price</th></tr>";

        $total = 0;

        foreach ($_SESSION['cart'] as $item) {
            echo "<tr>";
            echo "<td>" . $item['name'] . "</td>";
            echo "<td>$" . $item['price'] . "</td>";
            echo "</tr>";

        }
    }