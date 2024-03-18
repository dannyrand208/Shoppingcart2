<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style1.css">


</head>

<body>
    <section id="header">
        <a href="#"> <img src="img/logo.png" class="logo" alt=""></a>


        <div>
            <ul id="navbar">
                <li><a href="index1.php">Home</a></li>
               <li><a href="login.php">Login</a></li>
                <li><a href="shop.php" id="shop">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <a href="#" id="close"> <i class="fa fa-close"></i></a>
            </ul>
        </div>

        <div id="mobile">
            <a href="#"><i id="bar" class="fas fa-outdent"></i></a>

        </div>
    </section>


    <section id="page-header" class="about-header">
        <h2>#lets-talk</h2>
        <p>LEAVE A MESSAGE, We love to hear form you!</p>

    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today </h2>
            <h3>Head Office </h3>
            <div>
                <li>
                    <i class="fa fa-map-marker"></i>
                    <p> 68 lily street, braybrook, vic 3019, Australia</p>

                </li>
                <li>
                    <i class="fa fa-envelope"></i>
                    <p> tuanthanh2082000@gmail.com</p>

                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <p> 0450667138</p>

                </li>
                <li>
                    <i class="fa fa-clock"></i>
                    <p> Monday to Sunday: 9:00 am to 16:00pm</p>

                </li>
            </div>
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6306.581340449431!2d144.84218985446168!3d-37.78322727550674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65e2337df4ffd%3A0xa5bfa1e99b5205a1!2s68%20Lily%20St%2C%20Braybrook%20VIC%203019!5e0!3m2!1sen!2sau!4v1710679341402!5m2!1sen!2sau"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>

    </section>




    <section id="newsletter" class="section-p1">
        <div class="newtext">
            <h4> Sign Up For Newletters</h4>
            <p>Get E-mail updates about our latest shop and <span></span> special offers</p>


        </div>

        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal"> Sign Up</button>
        </div>

    </section>

    <footer id="oke" class="section-p1">
        <div class="col">
            <img src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p> <strong>Address:</strong> 68 Lily Streets, Brabrook, VIC 3019, Australia</p>
            <p> <strong>Phone:</strong> +61(0450667138)</p>
            <p> <strong>Working Hours:</strong> 9:00 - 18:00, Mon - Friday</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Term & Conditions</a>
            <a href="#">Contact Us</a>

        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>

        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <h4>Coppy rights</h4>
            <p>2021, Danny rand, Shoping Cart</p>

        </div>

    </footer>

    <script src="script1.js"></script>
    <script src="script2.js"></script>
    <style>
        #product1 {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
    </style>
</body>


</html>