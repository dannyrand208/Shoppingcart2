<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="login3.css">
    <link rel="stylesheet" href="style1.css">
   
    <title>Document</title>
</head>

<body>

<section id="header">
      <a href="#"> <img src="img/logo.png" class="logo" alt=""></a>


      <div>
         <ul id="navbar">
            <li><a  href="index1.php">Home</a></li>
            <li><a class="active"href="login.php">Login</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            <a href="#" id="close"> <i class="fa fa-close"></i></a>
         </ul>
      </div>

      <div id="mobile">
         <a href="#"><i id="bar" class="fas fa-outdent"></i></a>

      </div>
   </section>

<section id="login_page" class="section-p3">
    <div class="container" id="container">
        <div class="form-container sign-up">

            <form>
                <h1> Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon">
                        <i class="fa-brands fa-google"></i></a>

                    <a href="#" class="icon">
                        <i class="fa-brands fa-facebook"></i></a>

                    <a href="#" class="icon">
                        <i class="fa-brands fa-github"></i></a>

                    <a href="#" class="icon">
                        <i class="fa-brands fa-linkedin"></i></a>


                </div>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button > Sign Up</button>
                <span>Already have an account?</span>
                <button class="hidden" id="login"> Login</button>
            </form>
        </div>


        <div class="form-container sign-in">

            <form>
                <h1> Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon">
                        <i class="fa-brands fa-google"></i></a>

                    <a href="#" class="icon">
                        <i class="fa-brands fa-facebook"></i></a>

                    <a href="#" class="icon">
                        <i class="fa-brands fa-github"></i></a>

                    <a href="#" class="icon">
                        <i class="fa-brands fa-linkedin"></i></a>


                </div>
                <span> or use your email pasword</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <button> Login</button>
                <span>Dont have an account? Signup for more feature!</span>
                <button class="hidden" id="signup"> Sign up</button>
                
            </form>
        </div>




        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <!-- <h1>Welcome Back</h1>
                    <p>Enter your personal details to user all of site features</p> -->
                   
                </div>



                <div class="toggle-panel toggle-right">
                        
                <!-- <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to user all of site features</p> -->
                    
                </div>
            </div>
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
    <script>
        const registerBtn = document.getElementById('signup');
        const container = document.getElementById('container');
        const loginBtn = document.getElementById('login');

        const isActive =localStorage.getItem('active');
        
        if(isActive) {
            container.classList.add("active");
        }

        registerBtn.addEventListener("click", (e) => {
            e.preventDefault();
            container.classList.add("active");
        });

        loginBtn.addEventListener("click", (e)=> {
           
            container.classList.remove("active");
            e.preventDefault();
        })
    </script>
</body>


</html>