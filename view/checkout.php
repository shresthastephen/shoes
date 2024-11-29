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
    <link rel="stylesheet" href="./style/checkout.css">
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
      <li><a href="#">Contact</a></li>
      <li><i class="fa-solid fa-cart-shopping main-buy-icon"></i></li>
    </ul>                  
                  
  </nav> 
  <div class="checkout-container">
  <div class="bill-title">TrendyShoes-Checkout</div>
        <div class="checkout-bill"></div>

        <!-- checkout inputs -->
        <div class="checkout-inps">
            <div class="inp-group">
                <div class="inp-label">Address</div>
                <input type="text">
            </div>
            <div class="inp-group">
                <div class="inp-label">Phone number</div>
                <input type="text" placeholder="+977 - ">
            </div>
            <div class="inp-group">
                <div class="inp-label">Payment method</div>
                <div class="payment-method">
                    <div class="pm cod choosen-payment">Cash on Delivery</div>
                    <div class="pm esewa">
                        <img src="https://i0.wp.com/techlekh.com/wp-content/uploads/2023/01/eSewa-Money-Transfer.jpg?fit=1125%2C675&ssl=1" alt="">
                    </div>
                </div>
            </div>
            <a href="./index.php">
                <button class="checkout-btn">Checkout</button>
            </a>
        </div>
    </div>



</header>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./js/checkout.js"></script>
</body>
</html>