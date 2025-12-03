<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
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
            flex: 1;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center; 
            gap: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #574407;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #6a530a;
        }

        footer {
            background-color: #574407;
            color: white;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>

<?php
?>
<header>
    <h1>Iphone and Ipad Buy and Sell</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="sale.php">Sale</a>
        <a href="inventory.php">Stock</a>
    </nav>
</header>

<body>

<main>
    <h2>Place Your Order</h2>
    <form action="process_order.php" method="post">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="customer_name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="customer_email" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="customer_phone" required>

        <label for="message">Full Address:</label>
        <input type="text" id="address" name="customer_address" required>

        <label for="product">Select Product:</label>
        <select id="product" name="product" required>
            <option value="">-- Choose a product --</option>
            <option value="iPhoneX">iPhone SE</option>
            <option value="iPhoneX">iPhone 12</option>
            <option value="iPhoneX">iPhone 13</option>
            <option value="iPad">iPad Air</option>
            <option value="iPad">iPad Pro</option>
        </select>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>

        <button type="submit">Submit Order</button>
    </form>
</main>

</body>
</html>

<!-- Footer -->
<footer>
    Created by: Garin, Lauren A. WD-201 &copy; <?php echo date("Y"); ?>
</footer>

</body>
</html>