<?php
include("Functions.php");
$dbh = connectToDatabase();
$productid = $_GET['productid'];

$statement = $dbh->prepare('SELECT url_img From Product  WHERE Productid = ?');
$statement->bindValue(1, $productid);
$statement->execute();

$result = $statement->fetch(PDO::FETCH_ASSOC);
$img_url = $result['url_img'];


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
                <li><a href="login.php">Login</a></li>
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

    <?php

    if ($productid % 4 == 0) {
        echo '
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/' . $img_url . '" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
            <div class="small-img-col">
            <img src="img/products/f' . ($productid - 3) . '.jpg" width1="100%" class="small-img" alt="">
        </div>
        <div class="small-img-col">
            <img src="img/products/f' . ($productid - 2) . '.jpg" width1="100%" class="small-img" alt="">
        </div>
        <div class="small-img-col">
            <img src="img/products/f' . ($productid - 1) . '.jpg" width1="100%" class="small-img" alt="">
        </div>
        <div class="small-img-col">
            <img src="img/products/f' . ($productid) . '.jpg" width1="100%" class="small-img" alt="">
        </div>
            </div>
        </div>
    
        <div class="single-pro-details">
            <h6>Home/ T-Shirt/</h6>
            <h4>Men\'s Fashion T Shirt</h4>
            <h2>$139.00</h2>
            <select>
                <option>Select Size</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
                <option value="Small">Small</option>
                <option value="large">Large</option>
            </select>
            <div class="depzai">
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <button> Add To Cart</button>
            </div>
            <h4>Product Details</h4>
            <span>Elevate your casual wardrobe with the timeless style and exceptional comfort of the Gildan Ultra Cotton T-Shirt. Crafted with meticulous attention to detail and using premium materials, this classic t-shirt offers a perfect blend of style, durability, and comfort. Constructed from high-quality 100% cotton fabric, it ensures a soft, breathable feel against the skin, keeping you comfortable all day long. Designed for a relaxed and comfortable fit, featuring a classic crew neckline and short sleeves, it\'s a versatile wardrobe staple for any occasion. Engineered for lasting durability with double-needle stitching on the sleeves and bottom hem, it resists everyday wear and tear. </span>
        </div>
    </section>';
    } elseif ($productid == 1 || $productid  == 2 || $productid == 3) {
        echo '
        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="img/products/' . $img_url . '" width="100%" id="MainImg" alt="">
                <div class="small-img-group">
                <div class="small-img-col">
                <img src="img/products/f1.jpg" width1="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/products/f2.jpg" width1="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/products/f3.jpg" width1="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/products/f4.jpg" width1="100%" class="small-img" alt="">
            </div>
                </div>
            </div>
        
            <div class="single-pro-details">
                <h6>Home/ T-Shirt/</h6>
                <h4>Men\'s Fashion T Shirt</h4>
                <h2>$139.00</h2>
                <select>
                    <option>Select Size</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="Small">Small</option>
                    <option value="large">Large</option>
                </select>
                <div class="depzai">
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <button> Add To Cart</button>
                </div>
                <h4>Product Details</h4>
                <span>Elevate your casual wardrobe with the timeless style and exceptional comfort of the Gildan Ultra Cotton T-Shirt. Crafted with meticulous attention to detail and using premium materials, this classic t-shirt offers a perfect blend of style, durability, and comfort. Constructed from high-quality 100% cotton fabric, it ensures a soft, breathable feel against the skin, keeping you comfortable all day long. Designed for a relaxed and comfortable fit, featuring a classic crew neckline and short sleeves, it\'s a versatile wardrobe staple for any occasion. Engineered for lasting durability with double-needle stitching on the sleeves and bottom hem, it resists everyday wear and tear. </span>
            </div>
        </section>';


    } else {
        $postion = ($productid - ($productid % 4))+4 ;
        echo '
        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="img/products/' . $img_url . '" width="100%" id="MainImg" alt="">
                <div class="small-img-group">
                <div class="small-img-col">
                <img src="img/products/f' . ($postion - 3) . '.jpg" width1="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/products/f' . ($postion - 2) . '.jpg" width1="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/products/f' . ($postion - 1) . '.jpg" width1="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/products/f' . ($postion) . '.jpg" width1="100%" class="small-img" alt="">
            </div>
                </div>
            </div>
        
            <div class="single-pro-details">
                <h6>Home/ T-Shirt/</h6>
                <h4>Men\'s Fashion T Shirt</h4>
                <h2>$139.00</h2>
                <select>
                    <option>Select Size</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="Small">Small</option>
                    <option value="large">Large</option>
                </select>
                <div class="depzai">
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <button> Add To Cart</button>
                </div>
                <h4>Product Details</h4>
                <span>Elevate your casual wardrobe with the timeless style and exceptional comfort of the Gildan Ultra Cotton T-Shirt. Crafted with meticulous attention to detail and using premium materials, this classic t-shirt offers a perfect blend of style, durability, and comfort. Constructed from high-quality 100% cotton fabric, it ensures a soft, breathable feel against the skin, keeping you comfortable all day long. Designed for a relaxed and comfortable fit, featuring a classic crew neckline and short sleeves, it\'s a versatile wardrobe staple for any occasion. Engineered for lasting durability with double-needle stitching on the sleeves and bottom hem, it resists everyday wear and tear. </span>
            </div>
        </section>';


    }
    ?>





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
    <script src="script3.js"></script>
    
</body>

</html>