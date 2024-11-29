<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Poppins:ital@0;1&display=swap"
        rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="./style/nav.css">
        <link rel="stylesheet" href="./style/index1.css">
        <link rel="stylesheet" href="./style/cart.css">
        <link rel="stylesheet" href="./style/footer.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://kit.fontawesome.com/0e53af926d.js" crossorigin="anonymous"></script>
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
  <a href="./index.php">
    Trendy<span>Shoes<span>
  </a>
</label>

<ul>
<li>
   <a href="./index.php">Home</a>
</li>
                   
<li>
  <a href="./about.php">About</a>
 </li>
                    
<li>
  <a href="#">Contact</a>
</li>
                    
<li>
  <a href="#"><i class="fa-solid fa-cart-shopping main-buy-icon"></i></a>
</li>
</ul>                  
                    
</nav>                   

</header>

<div class="manmain">
 <div class="heading">
    <h1>Men Collection</h1>
 </div>

 <section class="product-section" class="section-p1">
        
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
  function emptyCart(){
    localStorage.setItem("data",[]);
    makeCart();
  }
</script>


</body>

</html>
