<?php
session_start();

//product array
$products = [
    "Apple" => 1,
    "Banana" => 2,
    "Orange" => 3,
];

//Check if user clicked "Add to cart"
if (isser($_GET['item'])) {
    $itemName = $_GET['item'];
    $itemPrice = $products[itemName];

    $_SESSION['cart'][] = ["name" => $itemName, "price" => $itemPrice];

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>

    <?php 
        foreach ($products as $name => $price) {
            ?>
            <p> 
                <?php echo $name; ?> - $<?php echo $price; ?>
                <a href = products.php?item=<?php echo $name; ?>">Add to Cart</a>"
            </p>
    <?php } ?>

    

        }