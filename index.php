<!DOCTYPE html>
<html>
<head>
    <title>Buy and Sell</title>
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
            gap: 15px; 
        }

        main h2 {
            color: #333;
            text-align: center;
        }

        main p {
            max-width: 800px; 
            text-align: center;
            line-height: 1.6;
        }

        .image-row {
            display: flex;
            justify-content: center; 
            gap: 20px; 
            flex-wrap: wrap;
        }

        .image-row img {
            width: 180px;
            height: auto;
        }

        footer {
            background-color: #574407;
            color: white;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <h1>Iphone and Ipad Buy and Sell</h1>
    <nav>
        <a href="sale.php">Sale</a>
        <a href="about.php">Order</a>
        <a href="inventory.php">Stock</a>
    </nav>
</header>

<!-- Main -->
<main>
    <h2>Welcome to Our iPhone and iPad Buy and Sell Business!</h2>
    <p>We buy and sell used iPhones and iPads. Check out our available products and offers!</p>

    <h2>Why Buy and Sell Gadgets?</h2>
    <p>Buying the latest gadgets, like iPhones and iPads, allows you to keep up with technological advancements and enjoy the best features, performance, and user experience. Apple devices are known for their durability, excellent performance, and long lifespan, making them a smart investment.</p>

    <h2>Why Sell Gadgets?</h2>
    <p>Selling your used devices can help you earn money back to fund your next purchase or invest in new technology. Selling used gadgets is an eco-friendly choice, as it promotes recycling and reduces electronic waste.</p>

    <div class="image-row">
        <img src="img/store.jpg" alt="store">
        <img src="img/phone.jpg" alt="iphone">
        <img src="img/ipad.webp" alt="ipad">
    </div>

</main>

<!-- Footer -->
<footer>
    Created by: Garin, Lauren A. WD-201 &copy; <?php echo date("Y"); ?>
</footer>

</body>
</html>