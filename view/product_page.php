<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Khuti</title>
    <link rel="stylesheet" href="../style/LandingPage.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f9f2fb;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
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
        .product-list {
            list-style-type: none;
            padding: 0;
        }
        .product-item {
            display: flex;
            justify-content: space-between;
            background-color: #f3e6f7;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 10px;
            align-items: center;
        }
        .product-item h3 {
            color: #630375;
            margin-bottom: 10px;
            font-size: 20px;
        }
        .product-item .details {
            flex-grow: 1;
        }
        .product-item .price {
            font-size: 18px;
            font-weight: bold;
            color: #630375;
        }
        .product-item .availability {
            color: green;
            font-weight: bold;
        }
        .button {
            background-color: #b97cda;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: block;
            font-size: 16px;
            text-align: center;
            margin-left: auto;
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
        <button><a href="contact.php">Contact Us</a></button>
    </div>
</nav>

<div class="container">
    <h2>Our Products</h2>
    <p>Browse through our carefully crafted handcrafted clothing. Each piece is made with attention to detail, offering you quality, style, and elegance.</p>
        <br>
    <ul class="product-list">
        <!-- Product 1 -->
        <li class="product-item">
            <div class="details">
                <h3>Hand-embroidered Kurta</h3>
                <p class="availability">Availability: In Stock</p>
            </div>
            <p class="price">$120 </p>
            <a href="#" class="button">View Details</a>
        </li>

        <!-- Product 2 -->
        <li class="product-item">
            <div class="details">
                <h3>Traditional Saree</h3>
                <p class="availability">Availability: Out of Stock</p>
            </div>
            <p class="price">$85 </p>
            <a href="#" class="button">View Details</a>
        </li>

        <!-- Product 3 -->
        <li class="product-item">
            <div class="details">
                <h3>Custom Dress</h3>
                <p class="availability">Availability: In Stock</p>
            </div>
            <p class="price">$150 </p>
            <a href="#" class="button">View Details</a>
        </li>

        <!-- Product 4 -->
        <li class="product-item">
            <div class="details">
                <h3>Embroidered Blouse</h3>
                <p class="availability">Availability: In Stock</p>
            </div>
            <p class="price">$75 </p>
            <a href="#" class="button">View Details</a>
        </li>

        <!-- Product 5 -->
        <li class="product-item">
            <div class="details">
                <h3>Silk Tunic</h3>
                <p class="availability">Availability: Out of Stock</p>
            </div>
            <p class="price">$130 </p>
            <a href="#" class="button">View Details</a>
        </li>
    </ul>
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
