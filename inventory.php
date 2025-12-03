<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stock Monitor</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2efe8;
            display: flex;
            flex-direction: column;
        }

        header {
            background: #574407;
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
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background: #574407;
            color: white;
        }

        footer {
            background: #574407;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>

<body>

<header>
    <h1>Iphone & Ipad Buy and Sell — Stock Monitor</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="sale.php">Sale</a>
        <a href="about.php">Order</a>
    </nav>
</header>

<?php
// Products array with individual tax percentages
$products = [
    "iPhone SE" => ["price" => 18000, "stock" => 8, "tax" => 5],
    "iPhone 12" => ["price" => 14000, "stock" => 5, "tax" => 10],
    "iPhone 13" => ["price" => 17500, "stock" => 12, "tax" => 12],
    "iPad Air"   => ["price" => 30000, "stock" => 3, "tax" => 13],
    "iPad Pro"   => ["price" => 34000, "stock" => 15, "tax" => 15],
];

// Functions
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}
?>

<main>
    <table>
        <tr>
            <th>Product</th>
            <th>Stock Level</th>
            <th>Reorder?</th>
            <th>Total Value (₱)</th>
            <th>Tax (%)</th>
        </tr>

        <?php foreach ($products as $product_name => $data): 
            $stock = $data["stock"];
            $price = $data["price"];
            $taxPercent = $data["tax"];
        ?>
        <tr>
            <td><?= $product_name ?></td>
            <td><?= $stock ?></td>
            <td><?= get_reorder_message($stock) ?></td>
            <td>₱<?= number_format(get_total_value((float)$price, (int)$stock), 2) ?></td>
            <td><?= $taxPercent ?>%</td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>

<footer>
    Created by Garin, Lauren A. WD-201 — &copy; <?= date("Y") ?>
</footer>

</body>
</html>
