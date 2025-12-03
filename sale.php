<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Iphone and Ipad Buy and Sell</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #e2d9ca;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #574407;
            padding: 15px;
            color: white;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            flex: 1;
        }

        h3 {
            color: #574407;
            margin-top: 20px;
        }

        p {
            margin: 5px 0;
        }

        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ccc;
        }

        footer {
            background: #574407;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: auto;
        }
    </style>
</head>
<body>

<header>
    <h1>Iphone and Ipad Buy and Sell</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">Order</a>
        <a href="inventory.php">Stock</a>
    </nav>
</header>

<main>
<?php
    $stockAvailable = 10; 
    $stockLow = 5; 

    // CONDITION: if-elseif-else statement
    if ($stockAvailable > $stockLow) {
        echo "<p>We have enough stock to fulfill your orders!</p>";
    } elseif ($stockAvailable == 0) {
        echo "<p>Sorry, we are currently out of stock. Please check back later.</p>";
    } else {
        echo "<p>Stock is running low! Hurry before it's gone!</p>";
    }
?>

<hr>

<h3>Current Offers</h3>
<?php
    $discountOffer = true; 
    $flashSale = false; 

    // CONDITION: if-elseif-else statement
    if ($discountOffer) {
        echo "<p>Special Offer: Get 10% off on all iPhones and iPads!</p>";
    } elseif ($flashSale) {
        echo "<p>Flash Sale: Get 50% off, only for today!</p>";
    } else {
        echo "<p>Check out our regular prices for quality products!</p>";
    }
?>

<hr>

<h3>Available iPhones and iPads for Sale</h3>
<p>Here are the iPhones and iPads we have in stock:</p>
<?php
    $products = ["iPhone SE", "iPhone 12", "iPhone 13", "iPad Air", "iPad Pro"];
    $i = 0;

    // LOOP: while loop
    while ($i < count($products)) {
        echo "<p>$products[$i]</p>";
        $i++;
    }
?>

<hr>

<h3>Price Updates</h3>
<p>Prices are updated based on demand and availability.</p>
<?php
$price = 17000; 
$priceIncrease = 500;
$maxPrice = 17500; 

echo "<p>Current price for iPhone 13: ₱" . number_format($price, 2) . "</p>";

$nextPrice = $price + $priceIncrease;
while ($nextPrice <= $maxPrice) {
    echo "<p>New price after increase: ₱" . number_format($nextPrice, 2) . "</p>";
    $nextPrice += $priceIncrease;
}
?>


<hr>

<h3>Top-Selling iPhones</h3>
<p>Here are the top 3 best-selling iPhones:</p>
<?php
    $topSellers = ["iPhone 13 Pro Max", "iPhone 12", "iPhone SE"];

    // LOOP: for loop
    for ($i = 0; $i < count($topSellers); $i++) {
        echo "<p>$topSellers[$i]</p>";
    }
?>
</main>

<footer>
    Created by: Garin, Lauren A. WD-201 &copy; <?php echo date("Y"); ?>
</footer>

</body>
</html>
