<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Terms and Services | Khuti</title>
    <link rel="stylesheet" href="../style/homepage.css" />
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f9f2fb;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 60px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #630375;
            text-align: center;
            margin-bottom: 5px;
        }
        label {
            font-weight: bold;
            color: #630375;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 20px;
            border: 1px solid #b97cda;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #b97cda;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            font-size: 16px;
        }
        button:hover {
            background-color: #630375;
            transition: 0.3s;
        }
        .message {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
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
        nav.navbar .nav-buttons button a {
            color: inherit;
            text-decoration: none;
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
    <div class="logo"><a href="landing_page.php">Khuti </a></div>
    <div class="nav-buttons">
        <button><a href="landing_page.php">HOME</a></button>
        <button><a href="product_page">Product</a></button>
    </div>
</nav>

<div class="container">
    <h1>Terms of Service</h1>
    <br>
    <p>By accessing or using our services, you agree to be bound by these Terms of Service.</p>
    <br>
    <h2>Use of Service</h2>
    <ul>
        <li>You agree to use the platform for lawful purposes only and in compliance with all applicable laws and regulations.</li>
        <li>You will not use the platform to engage in any harmful, unlawful, or disruptive activities.</li>
        <li>You agree not to use any content, designs, or materials from Khuti BD for commercial purposes without prior permission.</li>
    </ul>
    <br>
    <h2>Account Responsibilities</h2>
    <ul>
        <li>You are responsible for maintaining the confidentiality of your account credentials and any activities that occur under your account.</li>
        <li>Notify us immediately of any unauthorized use of your account.</li>
        <li>You agree to provide accurate and up-to-date information when creating your account.</li>
    </ul>
    <br>
    <h2>Content Ownership and Responsibility</h2>
    <ul>
        <li>You are solely responsible for any content you submit, including images, designs, and messages.</li>
        <li>We reserve the right to remove or refuse content that violates our policies, is harmful, or unlawful.</li>
        <li>All product designs, including custom orders, are owned by Khuti unless explicitly agreed otherwise.</li>
    </ul>
    <br>
    <h2>Orders and Payments</h2>
    <ul>
        <li>By placing an order, you agree to pay the total cost of the product, including shipping and handling fees.</li>
        <li>Orders are processed once payment is received, and shipping timelines will be provided at the time of purchase.</li>
        <li>We accept various payment methods, which will be detailed at checkout.</li>
    </ul>
    <br>
    <h2>Returns and Refunds</h2>
    <p>We offer returns for items that are defective or not as described. Custom orders cannot be refunded unless there is a defect or mistake on our part. Please contact us within 7 days of receiving your order for returns.</p>
    <br>
    <h2>Limitation of Liability</h2>
    <p>Khuti  is provided "as is" without warranties of any kind. We are not liable for any indirect, incidental, or consequential damages arising from the use of our platform or products.</p>
    <br>
    <h2>Termination</h2>
    <p>We may suspend or terminate your account if you violate these terms or engage in any conduct that negatively impacts Khuti or other users.</p>
    <br>
    <h2>Changes to Terms</h2>
    <p>We may update these terms periodically. Continued use of our platform after changes indicates your acceptance of the new terms.</p>
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
