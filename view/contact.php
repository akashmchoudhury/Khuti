<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Contact Us | Khuti</title>
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
    <div class="logo"><a href="landing_page.php">Khuti</a></div>
    <div class="nav-buttons">
        <button><a href="landing_page.php">HOME</a></button>
        <button><a href="product_page">Product</a></button>
    </div>
</nav>

<div class="container">
    <h1>Contact Us</h1>

    <p>If you have any questions, concerns, or feedback, feel free to reach out to us. We're happy to assist you!</p>
    <br>
    <h2>Get in Touch</h2>
    <form action="submit_contact.php" method="POST">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
    <br>

    <div class="message">
        <p>Or you can reach us at:</p>
        <br>
        <p>Email: support@khuti.com</p>
        <p>Phone: +8801XXXXXXXXX</p>
        <p>Address: Chittagong, Bangladesh</p>
        <br>
        <p>Or connect with us on our <a href="https://www.facebook.com/khutiBD" target="_blank">Facebook Page</a>.</p>
    </div>
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
