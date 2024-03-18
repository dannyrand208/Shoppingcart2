<?php
include('Functions.php');
$dbh = connectToDatabase();
$statement = $dbh->prepare('SELECT * FROM Product');
$statement->execute();
$data = array();



while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
   $data[] = $result;
}

?>
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
            <li><a class="active" href="shop.php" id="shop">Shop</a></li>
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


   <section id="page-header">
      <h2>#StayWithLinh</h2>
      <p> Save more with coupons & up to 70% off!</p>


   </section>

   <section id="product1" class="section-p1">



      <?php
      foreach ($data as $row) {

         echo '
  <div class="pro" id="div-link" data-productid="'.$row['Productid'].'">
     <img src=img/products/' . $row['url_img'] . ' alt="">
     <div class="des">
        <span>Adidas</span>
        <h5>Cartoon T-Shirts</h5>
        <div class="star">

         <input type="hidden" value="' . $row['Productid'] . '" class="productid">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
        </div>
        <h4>$78</h4>
     </div>
     <a href="sproduct.php"><i class="fa fa-cart-shopping "></i></a>
  </div>
</div>';
         echo '<script>';
         echo 'document.addEventListener(\'DOMContentLoaded\', function(){
    var divElements = document.querySelectorAll(".pro");
    divElements.forEach(function(divElement) {
        divElement.addEventListener(\'click\', function() {
            var productid = this.getAttribute("data-productid");
            window.location.href = "sproduct.php?productid=" + productid;
        });
    });
});';

         echo '</script>';


      }


      ?>

   </section>


   <section id="pagination" class="section-p1">
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#"><span>&#8594;</span></a>


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