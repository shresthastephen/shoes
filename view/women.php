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
        <a href="./index.php">Trendy<span>Shoes<span></a>
      </label>

      <ul>
        <li><a href="./index.php">Home</a></li>         
        <li><a href="./about.phpt">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#"><i class="fa-solid fa-cart-shopping buy-icon"></i></a></li>
      </ul>                  
                    
    </nav>                   

  </header>

    <div class="manmain">
      <div class="heading">
        <h1>Women Collection</h1>
      </div>

      <section class="product-section" class="section-p1">
        
        <div class="pro-collection">
          <div class="product-cart">
            <img src="https://m.media-amazon.com/images/I/61g79-ocE5L._AC_UF1000,1000_QL80_.jpg" alt="product image" />
            <span>Shoes</span>
            <h4>Leather Boot</h4>
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
          <img src="https://slimages.macysassets.com/is/image/MacysInc/C2301935_CENTERCORE_RIB_56233_Evening_Wedding:1x1?$$&fmt=png-alpha" alt="product image" />
          <span>Shoes</span>
          <h4>Party Wear Heel</h4>
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
          <img src="https://www.soloto.com/cdn/shop/products/1_09ddef9a-a96d-4b48-9b3f-c70addb7bdef.jpg?v=1638786716" alt="product image" />
          <span>Shoes</span>
          <h4>Formal Shoes</h4>
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
          <img src="https://images-cdn.ubuy.co.in/645d1d32a0ef957de34d1e90-women-shoes-sneakers-girls-canvas-shoes.jpg" alt="product image" />
          <span>Shoes</span>
          <h4>Double Sole Converse</h4>
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
          <img src="https://www.coggles.com/image/s_1100x1200/https://static.thcdn.com/productimg/original/12105575-1935002442583174.jpg" alt="product image" />
          <span>Shoes</span>
          <h4>Dr. Martin Shoes</h4>
          <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          </div>
          <h4 class="price">$78</h4>
          <a href="#"><i class="fa-solid fa-cart-shopping buy-icon"></i></a>
         </div>
      
         <div class="product-cart">
          <img src="https://i.ebayimg.com/images/g/LB0AAOSwVDRlMWcm/s-l1600.jpg" alt="product image" />
          <span>Goldstar</span>
          <h4>Sneaker</h4>
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
          <img src="https://i8.amplience.net/s/scvl/125835_267225_SET/1" alt="">
          <span>Shoes</span>
          <h4>Formal Heel</h4>
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
          <img src="https://www.soosi.co.in/cdn/shop/products/WhatsApp_Image_2019-12-05_at_19.53.10_1200x1200.jpg?v=1575720267" alt="product image" />
          <span>Shoes</span>
          <h4>Classic Boot</h4>
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



</body>

</html>