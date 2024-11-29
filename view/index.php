<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrendyShoes-Stephen</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/0e53af926d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./style/nav.css">
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/index1.css">
    <link rel="stylesheet" href="./style/cart.css"> 
    <link rel="stylesheet" href="./style/footer.css">
        
</head>

<body>
<header>
  <?php session_start(); ?>
  <div class="info">
    <div class="left-info">
      <ul>
        <li>Welcome</li>
        <li><a href="tel:9863021927"></a>9863021927</li>
        <li><a href="mailto:stephencrestha07@gmail.com">info@trendyshoes.com</a>
      </ul>
    </div>
    <div class="right-info">
     <ul>
      <li><a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a> </li>
      <li><a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a></li>
      <!-- <li><a href="./login.php">Login</a></li> -->
      <!-- <li><a href="./register.php">Register</a></li> -->
      <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) { ?>
      <span><?php echo $_SESSION['username']; ?></span>
      <a class="login" href="./../backend/logout.php">Log Out</a>
      <?php } else { ?>
      <a class="login" onclick="emptyCart" href="./login.php">Log In</a>
      <a href="./register.php">Register</a>
      <?php } ?>
     </ul>
    </div>
  </div>


  <nav class="cf">
    <label class="branding">
      <a href="./index.php">Trendy<span>Shoes<span></a>
    </label>

    <ul>
      <li><a href="./index.php">Home</a></li>         
      <li><a href="./about.php">About</a></li>
      <li><a href=".grid">Contact</a></li>
      <li><i class="fa-solid fa-cart-shopping main-buy-icon"></i></li>
    </ul>                  
                  
  </nav>  

  <div class="subheading">
    <p>OUR BIGGEST SALE YET 50% OFF ON ALL PRODUCTS</p>
  </div>
</header>
        
    <div class="mainimg">
        <img src="../images/pic/loafer.jpg" alt="">
        <div class="imgtext" data-aos="fade-up" data-aos-duration="3000">
         <div class="textimg">        
          <p class="one">New Arrival</p>
          <p class="two">UPTO 30% OFF</p>
          <p class="three">New Stylish Shoes</p>
          </div>
          <a href="#" class="button">Shoes Collection</a>
        </div>
    </div>
         
    <!-- Collection Section -->
        
    <div id="collection">
      <h2>Collection</h2> 
      <div class="subcollection">
        <div class="mencollection">
          <img src="../images/pic/mencollection.jpg" alt="">
          <a href="./men.php"><p>Men's Collection</p></a>
        </div>
        
        <div class="womencollection">
          <img src="../images/pic/womencollection.jpg" alt="">
          <a href="./women.php"><p>Women's Collection</p></a>
        </div>
      </div>    
    </div>

    <section class="product-section" class="section-p1">
      <h1>New Arrivals</h1>
      <p>New Collection Modern Design</p>
      <div class="pro-collection">
        <div class="product-cart">
         <img src="../images/Shoes/Goldstar.jpg" alt="product image" />
          <span>Goldstar</span>
          <h4>Goldstar Sneaker Shoes</h4>
          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <h4 class="price">$69</h4>
          <a href="#"><i class="fa-solid fa-cart-shopping buy-icon"></i></a>
        </div>

        <div class="product-cart">
          <img src="../images/Shoes/Goldstar1.jpg" alt="product image" />
          <span>Goldstar</span>
          <h4>Goldstar Shoes</h4>
          <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          </div>
          <h4 class="price">$69</h4>
          <a href="#"><i class="fa-solid fa-cart-shopping buy-icon"></i></a>
        </div>

        <div class="product-cart">
         <img src="../images/Shoes/Nike.jpg" alt="product image" />
          <span>Nike</span>
          <h4>Air Jorden Shoes</h4>
          <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          </div>
          <h4 class="price">$69</h4>
          <a href="#"><i class="fa-solid fa-cart-shopping buy-icon"></i></a>
        </div>

        <div class="product-cart">
          <img src="../images/Shoes/Nike1.jpg" alt="product image" />
          <span>Nike</span>
          <h4>Air Force One Shoes</h4>
          <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          </div>
          <h4 class="price">$69</h4>
          <a href="#"><i class="fa-solid fa-cart-shopping buy-icon"></i></a>
        </div>

        <div class="product-cart">
          <img src="../images/Shoes/Nike3.jpeg" alt="product image" />
          <span>Nike</span>
          <h4>Nike Blazer Shoes</h4>
          <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          </div>
          <h4 class="price">$69</h4>
          <a href="#"><i class="fa-solid fa-cart-shopping buy-icon"></i></a>
        </div>

        <div class="product-cart">
          <img src="../images/Shoes/Goldstar3.jpg" alt="product image" />
          <span>Goldstar</span>
          <h4>Sport Shoes</h4>
          <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          </div>
          <h4 class="price">$69</h4>
          <a href="#"><i class="fa-solid fa-cart-shopping buy-icon"></i></a>
        </div>

        <div class="product-cart">
          <img src="https://sportsexcellence.com/cdn/shop/files/IF2376_1_FOOTWEAR_Photography_SideLateralCenterView_white.jpg?v=1689685974&width=1000" alt="">
          <span>adidas</span>
          <h4>PureBoost Sport Shoes</h4>
          <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          </div>
          <h4 class="price">$69</h4>
          <a href="#"><i class="fa-solid fa-cart-shopping buy-icon"></i></a>
        </div>


        <div class="product-cart">
         <img src="https://www.runnerinn.com/f/13703/137038256/adidas-vs-set.jpg" alt="product image" />
          <span>adidas</span>
          <h4>Sneaker Shoes</h4>
          <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          </div>
          <h4 class="price">$69</h4>
          <a href="#"><i class="fa-solid fa-cart-shopping buy-icon"></i></a>
        </div>
     </div>
    </section>

  <section id="newsletter">
    <div class="newsletter-text">
      <h3>Sign Up For Newsletters</h3>
      <h5>get e-mail updates about out latest shop and <span>special offers</span></h5>
    </div>
    
    <div class="form">
      <input type="email" placeholder="Your email address" id="email-address-input">
      <button>Sign Up</button>
    </div>
  </section>
       
      
  <!-- Trusted Partner -->
  <div class="partner">
    <h2>Trusted Partners</h2>
    <div class="partner-inner">
      <div class="partnerimg">
        <a target="_blank"><img src="../images/Brand/brandnike.jpg" alt=""></a>
      </div>
      
      
      <div class="partnerimg">
        <a target="_blank"><img src="../images/Brand/black_logo.png" alt=""></a>
      </div>
      
      <div class="partnerimg">
        <a target="_blank"><img src="../images/Brand/Converse_logo.svg.png" alt=""></a>
      </div>
        
      <div class="partnerimg">
        <a target="_blank"><img src="../images/Brand/brandadidas.jpg" alt=""></a>
      </div>
    </div>
  </div>

  <section id="features" class="section-p1">
    <div class="f-box">
      <img src="../images/features/f1.png" alt="free shipping" />
      <h6>Free shipping</h6>
    </div>

    <div class="f-box">
      <img src="../images/features/f2.png" alt="online order" />
       <h6>online order</h6>
    </div>
     
    <div class="f-box">
      <img src="../images/features/f3.png" alt="save money" />
      <h6>save money</h6>
    </div>
  
    <div class="f-box">
      <img src="../images/features/f4.png" alt="promotions" />
      <h6>promotions</h6>
    </div>
  
    <div class="f-box">
      <img src="../images/features/f5.png" alt="happy sell" />
      <h6>happy sell</h6>
    </div>
  
    <div class="f-box">
      <img src="../images/features/f6.png" alt="24/7 support" />
      <h6>24/7 support</h6>
    </div>
  </section>

  <div class="cart-sec">
    <h2>Shopping Cart</h2>
  </div>


  <footer class="footer">

   <section class="grid">

      <div class="box">
         <h3>Quick Links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="men.php"> <i class="fas fa-angle-right"></i> Men's Collection</a>
         <a href="women.php"> <i class="fas fa-angle-right"></i>Women's Collection</a>
      </div>

      <div class="box">
         <h3>Extra Links</h3>
         <a href="login.php"> <i class="fas fa-angle-right"></i> Login</a>
         <a href="register.php"> <i class="fas fa-angle-right"></i> Register</a>
         <a href="cart.php"> <i class="fas fa-angle-right"></i> Cart</a>
         <!-- <a href="orders.php"> <i class="fas fa-angle-right"></i> Orders</a> -->
      </div>

      <div class="box">
         <h3>Contact us</h3>
         <a href="tel:9863021927"><i class="fas fa-phone"></i> +977 9863021927</a>
         <a href="mailto:stephencrestha07@gmail.com"><i class="fas fa-envelope"></i> info@trendyshoes.com</a>
         <a href="https://www.google.com/myplace"><i class="fas fa-map-marker-alt"></i> Lalitpur, Nepal</a>
      </div>

      <div class="box">
         <h3>Follow us</h3>
         <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i> facebook</a>
         <a href="https://www.instagram.com"><i class="fab fa-instagram"></i> instagram</a>
         
      </div>

   </section>

   <div class="credit"> Copyright &copy; TrendyShoes | <span>Stephen G. Shrestha</span> </div>

</footer>

            
  <script src="./js/cart.js"></script>
  <script>
    AOS.init();

    function emptyCart(){
      localStorage.setItem("data",[]);

      makeCart();
    }
  </script>
  

</body>

</html>