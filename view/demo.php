<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo | Khuti</title>
    <link rel="stylesheet" href="../style/LandingPage.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f9f2fb;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 60px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #630375;
            text-align: center;
            margin-bottom: 20px;
        }
        .demo-content {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }
        .demo-item {
            width: 30%;
            text-align: center;
            background-color: #f3e6f7;
            padding: 15px;
            border-radius: 10px;
        }
        .demo-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .button {
            background-color: #b97cda;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: block;
            margin: 20px auto;
            width: 200px;
            text-align: center;
        }
        .button:hover {
            background-color: #630375;
            transition: 0.3s;
        }
        nav.navbar, footer {
            background-color: #b97cda;
            color: white;
            padding: 15px 20px;
        }
        nav.navbar .logo a {
            color: #630375;
            font-weight: 700;
            font-size: 24px;
            text-decoration: none;
        }
        nav.navbar .nav-buttons button {
            background-color: #fbf7fc;
            border: none;
            border-radius: 20px;
            padding: 8px 16px;
            margin-left: 10px;
            cursor: pointer;
            font-weight: bold;
            font-size: 12px;
            font-style: italic;
            color: #b97cda;
        }
        nav.navbar .nav-buttons button:hover {
            background-color: #630375;
            color: white;
            transform: scale(1.05);
            transition: 0.3s;
        }
        footer {
            text-align: center;
            font-size: 14px;
        }
        footer a {
            color: #630375;
            text-decoration: none;
            margin: 0 8px;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="logo"><a href="landing_page.php">Khuti</a></div>
    <div class="nav-buttons">
        <button><a href="landing_page.php">HOME</a></button>
        <button><a href="product_page.php">Products</a></button>
    </div>
</nav>

<div class="container">
    <h2>Welcome to the Khuti Demo</h2>
    <p>Explore our selection of handcrafted clothing and see the magic for yourself. Browse through some of our custom-made collections below!</p>
        <br>
    <div class="demo-content">
        <div class="demo-item">
            <img src="../assets/dp1.jpg" alt="Product 1">
            <h3>Hand-embroidered Kurta</h3>
            <p>A beautiful piece of traditional wear, carefully crafted with intricate hand embroidery.</p>
        </div>

        <div class="demo-item">
            <img src="../assets/dp2.jpg" alt="Product 2">
             <h3>3pc Salwar</h3>
            <p>Elegant 3-piece salwar set, perfect for any occasion. Crafted with high-quality fabric for comfort and style.</p>
        </div>

        <div class="demo-item">
            <img src="../assets/dp3.jpg" alt="Product 3">
            <h3>Custom Dress</h3>
            <p>A custom-made dress designed to match your unique style and preferences.</p>
        </div>
    </div>

    <a href="product_page.php" class="button">Browse More Products</a>
</div>

<footer>
    &copy; 2025 Khuti. All rights reserved.
    <br>
    <a href="privacy_policy.php">Privacy Policy</a> |
    <a href="terms_and_conditions.php">Terms of Service</a> |
    <a href="contact.php">Contact Us</a>
</footer>

</body>
</html>
