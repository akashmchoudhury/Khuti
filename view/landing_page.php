<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage  | Khuti</title>
    <link rel="stylesheet" href="../style/LandingPage.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="landing_page.php">Khuti</a>
        </div>
        <div class="nav-buttons">
            <button><a href="product_page.php">Products</a></button>
        </div>
    </nav>
    <div class="content-area">
        <div class="column image-stack">
            <img src="../assets/lp1.jpg" alt="Photo 1">
            <br>
            <img src="../assets/lp2.jpg" alt="Photo 2">
        </div>

        <div class="column text-block middle-column">
            <div class="ad-section" style="text-align: center;">
                <h2>Discover the Art of Handcrafted Clothing</h2>
                <p>Explore Jannat's unique collection of handmade, custom-sewed clothes, designed with love and care in Chittagong.</p>

                <h2>Timeless Elegance with Every Stitch</h2>
                <h3>Welcome to Khuti - dress by Jannat</h3>
                <p style="text-align: justify;">
                    Jannat's creations are more than just clothes—they are wearable art. Each piece is handcrafted with passion and attention to detail, using high-quality materials. Whether you're looking for traditional wear, modern outfits, or something uniquely personal, Khuti  offers a wide range of options tailored to your style and preferences. Join our community of satisfied customers and experience the craftsmanship that goes into every design.
                </p>
                <button onclick="location.href='product_page.php'" style="align-items: center;">Get Started</button>

                <section class="offer-section" style="margin: 60px 0; text-align: center;">
                    <h2>What We Offer</h2>
                    <ul style="list-style: none; padding: 0; max-width: 600px; margin: auto; text-align: left;">
                        <li>✔ Custom-made clothes with unique designs</li>
                        <li>✔ High-quality fabrics for comfort and durability</li>
                        <li>✔ Traditional and contemporary styles available</li>
                        <li>✔ Personalized fittings and tailored options</li>
                        <li>✔ Affordable pricing with excellent craftsmanship</li>
                        <li>✔ Free consultation for custom orders</li>
                    </ul>
                </section>

                <section class="goals-section" style="text-align: center; margin: 60px 20px;">
                     <h2>Our Vision</h2>
                        <p>At Khuti , we aim to bring a blend of tradition and modernity to your wardrobe. Our vision is to create clothes that not only look good but feel good. With a focus on quality, comfort, and individuality, we’re dedicated to giving our customers something truly special:</p>
                        <ul style="list-style: none; padding: 0; max-width: 800px; margin: auto; text-align: left;">
                            <li>🎯 To offer handcrafted, one-of-a-kind clothing pieces.</li>
                            <li>📈 To provide custom fittings and personalized designs.</li>
                            <li>💡 To blend traditional craftsmanship with modern trends.</li>
                            <li>🔒 To ensure an excellent customer experience with secure orders.</li>
                            <li>🌐 To bring the art of handcrafted clothes to every doorstep in Bangladesh.</li>
                        </ul>
                </section>


                <section class="about-section" style="margin: 60px 0; text-align: center;">
                    <h2>About Khuti</h2>
                        <p style="max-width: 600px; margin: auto; text-align: justify;">
                            Khuti  is a passion project by Jannat, a talented artisan based in Chittagong. What started as a small venture has now grown into a beloved brand offering handcrafted, custom-made clothing. Each piece reflects Jannat's dedication to quality, craftsmanship, and individuality. Whether you're looking for something for a special occasion or daily wear, Khuti  is here to bring your fashion dreams to life.
                        </p>
                </section>
            </div>
        </div>

        <div class="column sidebar-column">
           <section class="demo" style="text-align: center; margin: 60px 20px;">
                <h2>See the Magic of Handcrafted Clothes</h2>
                <p>No need to visit the store—experience Khuti 's custom clothing online!</p>
                <br>
                <button class="button button--large--cta" style="width: 95%; margin: 0 auto; " onclick="location.href='demo.php'">Try Demo</button>
                
            </section>

            <section class="leaderboard-section" style="text-align: center; margin-top: 60px; align-content: center;">
                <h2>🏆 Our Top Customers</h2>
                    <table class="leaderboard" style="margin: 0 auto;">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Item Purchased</th>
                            <th>Member Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Fatima</td>
                            <td>Hand-embroidered Kurta</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>Ahsan</td>
                            <td>Traditional Saree</td>
                            <td>Platinum</td>
                        </tr>
                        <tr>
                            <td>Rupa</td>
                            <td>Custom Dress</td>
                            <td>Bronze</td>
                        </tr>
                        </tbody>
                    </table>
                </section>

            <section class="testimonials" style="text-align: center; margin: 60px 20px;">
                <h2>💬 What Our Customers Are Saying</h2>
                <div id="testimonialBox" style="font-style: italic; max-width: 600px; margin: auto; font-size: 18px;"></div>
            </section>



            <section class="user-roles" style="text-align: center; margin-top: 60px;">
                 <h2>Choose Your Style</h2>
                    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
                        <div class="role-card">👗 Custom Order</div>
                        <div class="role-card">👚 Ready-to-Wear</div>
                        <div class="role-card">💍 Wedding Collection</div>
                    </div>
            </section>


            <section class="stats" style="text-align: center; margin: 60px 0;">
                <h2>Our Impact</h2>
    <p>👗 1000+ Custom Orders | 🌿 500+ Happy Customers | 💫 50+ Unique Designs</p>
            </section>

            <section class="faq" style="margin: 60px 20px; text-align: center;">
                    <h2>FAQs</h2>
         <p><strong>Q:</strong> Is there a return policy for custom orders? <br><strong>A:</strong> Yes, we offer a return policy for custom orders if the item does not meet your expectations. Please contact us within 7 days of receiving your order.</p>
    </section>
        </div>
    </div>

    <div>
        <footer style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #ccc; text-align: center;">
                <p>&copy; 2025 Khuti. All rights reserved.</p>
                <p>
                    <a href="privacy_policy.php">Privacy Policy</a> |
                    <a href="terms_and_conditions.php">Terms of Service</a> |
                    <a href="contact.php">Contact Us</a>
                    <br>

                </p>
        </footer>
    </div>
    <script src="../js/landingpage.js"></script>
</body>
</html>
