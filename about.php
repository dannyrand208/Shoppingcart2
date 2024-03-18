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
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <a href="#" id="close"> <i class="fa fa-close"></i></a>
            </ul>
        </div>

        <div id="mobile">
            <a href="#"><i id="bar" class="fas fa-outdent"></i></a>

        </div>
    </section>


    <section id="page-header" class="about-header">
        <h2>#KnowUs</h2>
        <p>Know more about us, about this webstie</p>


    </section>


    <section id="about-head" class="section-p1">
        <img src="img/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Welcome to Cara - where innovation meets excellence, and every project is a testament to our commitment
                to quality and customer satisfaction. Founded on the principles of integrity, creativity, and
                collaboration, Cara is more than just a company; we are a community of passionate professionals
                dedicated to pushing the boundaries of possibility in the digital world</p>
            
            <abbr title="">
                
Creating stunning images requires attention to detail, a keen eye for composition, and a mastery of light and shadow. Each pixel is meticulously crafted to evoke emotion, tell a story, or captivate the viewer's imagination. 
            </abbr>
             <br> <br>


             <marquee behavior="" direction="right" loop="-1" >
                We are superman
             </marquee>

        </div>

    </section>

    <section id="about-app" class="section-p1">
        <h1> Download Our <a href="#">App</a> </h1>
        <div class="video">
            <video height="1000"loop autoplay muted src="img/about/1.mp4"></video>
        </div>

    </section>


   <section id="feature" class="section-p1">
      <div class="fe-box">
         <img src="img/features/f1.png" alt="">
         <h6>Free shipping</h6>
      </div>
      <div class="fe-box">
         <img src="img/features/f2.png" alt="">
         <h6>Online Order</h6>
      </div>
      <div class="fe-box">
         <img src="img/features/f3.png" alt="">
         <h6>Save Money</h6>
      </div>
      <div class="fe-box">
         <img src="img/features/f4.png" alt="">
         <h6>Promotions</h6>
      </div>
      <div class="fe-box">
         <img src="img/features/f5.png" alt="">
         <h6>Happy Sell</h6>
      </div>
      <div class="fe-box">
         <img src="img/features/f6.png" alt="">
         <h6>24/7 Hours Support</h6>
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