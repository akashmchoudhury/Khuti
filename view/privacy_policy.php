<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Privacy Policy | Khuti </title>
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
    <h1>Privacy Policy</h1>

    <p>At Khuti , we value and prioritize your privacy. This Privacy Policy explains how we collect, use, and protect your personal information when you use our website and services.</p>

    <h2>Information We Collect</h2>
    <ul>
        <li>Personal details you provide when registering or making a purchase (such as your name, email, phone number, and shipping address).</li>
        <li>Payment information such as credit card details (which are processed securely by our payment partners).</li>
        <li>Usage data regarding how you interact with our website, including pages visited and purchase history.</li>
        <li>Cookies and tracking technologies to improve the website functionality, user experience, and analytics.</li>
    </ul>

    <h2>How We Use Your Information</h2>
    <ul>
        <li>To process and fulfill your orders, including delivering the products to your specified address.</li>
        <li>To improve and personalize your experience on our website, ensuring that it meets your needs and preferences.</li>
        <li>To communicate with you regarding your orders, promotions, and other relevant updates related to Khuti .</li>
        <li>To comply with legal obligations and protect the security and integrity of our website and services.</li>
    </ul>

    <h2>Your Rights</h2>
    <p>You have the right to access, correct, and delete your personal information. To exercise these rights, please contact us through the contact page on our website.</p>

    <h2>Cookies</h2>
    <p>We use cookies to track your preferences and improve your browsing experience. You can choose to disable cookies through your browser settings; however, this may affect your user experience on the website.</p>

    <h2>Data Security</h2>
    <p>We take the security of your personal information seriously and employ industry-standard security measures to protect it from unauthorized access or disclosure.</p>

    <h2>Third-Party Services</h2>
    <p>We do not sell, trade, or rent your personal data to third parties. However, we may share your data with third-party service providers (such as payment processors or shipping companies) to complete the services you request.</p>

    <h2>Changes to This Privacy Policy</h2>
    <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated date. By continuing to use our website, you accept the revised policy.</p>

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