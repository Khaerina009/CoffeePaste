<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Periksa jika terdapat fragment identifier pada URL (ID produk)
    if (window.location.hash) {
        var targetId = window.location.hash.substring(1); // Menghapus karakter '#' di awal fragment identifier
        var targetElement = document.getElementById(targetId);

        if (targetElement) {
            // Elemen dengan ID yang sesuai ditemukan
            // Tambahkan efek atau animasi yang Anda inginkan
            targetElement.classList.add("highlight", "animate-highlight");
            
      
            // Buat penundaan (misalnya, 2 detik) untuk menghilangkan efek highlight
            setTimeout(function() { 
              targetElement.classList.remove("animate-highlight");

            }, 1000);
          }
    }
});

</script>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>CoffeePaste</title>
                <!--Link CSS-->
                <link rel="stylesheet" href="css\style.css"> 
                <!--Box Icons-->
                <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
                <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

                <script src="js/addChart.js"></script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="js/ajax.js"></script>
                
    </head>     
    <body>
        <!--Navbar--> 
        <header class="products">
            <a href="index.php" class="logo">
                <img src="img\logo.png" alt="">
                <h2>CoffeePaste</h2>
            </a>
            <!--Menu Icon-->
            <i class='bx bx-menu' id="menu-icon"></i>
            <!--Links-->
            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="reservation.php">Reservation</a></li>
            </ul>
            <!--Icon-->
            <div class="header-icon">
              <div class="shopping">
                <i class="bx bx-cart-alt"></i>
                <span class="quantity">0</span>
              </div>
              <i class="bx bx-search" id="search-icon"></i>
            </div>
    
            <!--search box-->
            <div class="search-box">
        <input type="text" name="" id="searchInput" placeholder="Search Here" />
        <div id="searchResults"></div>
      </div>
        </header>

    <div class="list">
              
    </div>
    <!--Add to Cart card-->
    <div class="card">
      <h1>Your Cart</h1>
      <ul class="listCard">
      </ul>
      <div class="checkOut">
        <div class="orderNow">
          <h3>Order</h3>
        </div>
        <div class="closeShopping">Close</div>
      </div>
    </div>

        <!--Products-->

        <div class="heading">
            <h1 >OUR PRODUCTS</h1>
          </div>
        <section class="products" id="products">

              <p><b>Coffee</b></p>
            <!--container products-->
            <div class="products-container">
              <div class="box" id="1">
                <img src="img/p1.jpeg" alt="">
                <h3>Americano</h3>
                <div class="content">
                  <span>Rp 20.000</span>
                  <a href="#">Add to Cart</a> 
              </div>
            </div>
            <div class="box" id="2" >
              <img src="img/p2.jpeg" alt="">
              <h3>Dalgona Coffee</h3>
              <div class="content">
                <span>Rp 25.000</span>
                <a href="#">Add to Cart</a> 
            </div>
            </div>
              <div class="box" id="3">
                <img src="img/p3.jpeg" alt="">
                <h3>Matcha Latte</h3>
                <div class="content">
                  <span>Rp 28.000</span>
                  <a href="#">Add to Cart</a> 
              </div>
            </div>
              <div class="box" id="4">
                <img src="img/p4.jpeg" alt="">
                <h3>Frappucino Caramel</h3>
                <div class="content">
                  <span>Rp 30.000</span>
                  <a href="#">Add to Cart</a> 
              </div>
            </div>
              <div class="box" id="5">
                <img src="img/p5.jpeg" alt="">
                <h3>Mocktail Coffee</h3>
                <div class="content">
                  <span>Rp 23.000</span>
                  <a href="#">Add to Cart</a> 
              </div>
            </div>
              <div class="box" id="6">
                <img src="img/p6.jpeg" alt="">
                <h3>Taro Coffee</h3>
                <div class="content">
                  <span>Rp 20.000</span>
                  <a href="#">Add to Cart</a> 
              </div>
            </div>
            <div class="box" id="7">
              <img src="img/p7.jpeg" alt="">
              <h3>Vanilla Latte</h3>
              <div class="content">
                <span>Rp 25.000</span>
                <a href="#">Add to Cart</a> 
            </div>
          </div>
          </div>
          <p><b>Non Coffee</b></p>
            </div>
            <!--container products-->
            <div class="products-container">
              <div class="box" id="8">
                <img src="img/b1.jpeg" alt="">
                <h3>Dark Chocolate</h3>
                <div class="content">
                  <span>Rp 20.000</span>
                  <a href="#">Add to Cart</a> 
              </div>
            </div>
            <div class="box" id="9">
              <img src="img/b2.jpeg" alt="">
              <h3>Dark Citrus</h3>
              <div class="content">
                <span>Rp 20.000</span>
                <a href="#">Add to Cart</a> 
            </div>
            </div>
              <div class="box" id="10">
                <img src="img/b3.jpeg" alt="">
                <h3>Strawberry Milk</h3>
                <div class="content">
                  <span>Rp 25.000</span>
                  <a href="#">Add to Cart</a> 
              </div>
            </div>
            <div class="box" id="11">
              <img src="img/b4.jpeg" alt="">
              <h3>Ice Tea</h3>
              <div class="content">
                <span>Rp 15.000</span>
                <a href="#">Add to Cart</a> 
            </div>
          </div>
          </div>
          <p><b>Snack</b></p>
            </div>
            <!--container products-->
            <div class="products-container">
              <div class="box" id="12">
                <img src="img/a1.jpeg" alt="">
                <h3>Cheese Roll</h3>
                <div class="content">
                  <span>Rp 20.000</span>
                  <a href="#">Add to Cart</a> 
              </div>
            </div>
            <div class="box" id="13">
              <img src="img/a2.jpeg" alt="">
              <h3>Chicken Wings</h3>
              <div class="content">
                <span>Rp 25.000</span>
                <a href="#">Add to Cart</a> 
            </div>
            </div>
              <div class="box" id="14">
                <img src="img/a3.jpeg" alt="">
                <h3>Cheese Pizza</h3>
                <div class="content">
                  <span>Rp 30.000</span>
                  <a href="#">Add to Cart</a> 
              </div>
            </div>
            <div class="box" id="15">
              <img class="img" src="img/a4.jpeg" alt="">
              <h3>French Fries</h3>
              <div class="content">
                <span>Rp 15.000</span>
                <a href="#">Add to Cart</a> 
            </div>
          </div>
          </section>

      <section class="footer">
      <div class="footer-box">
        <h2>Coffeepaste</h2>
        <p>
          Follow our social media: 
        </p>
        <div class="social">
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/01supremacy?igsh=a2Rpc3dsdWE5ZWZj"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-tiktok"></i></a>
        </div>
      </div>
      <div class="footer-box">
        <h3>Support</h3>
        <li><a href="about.php#gallery">Gallery</a></li>
        <li><a href="https://maps.app.goo.gl/vzfpxZNmX9U3kBH37">Location</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="reservation.php">Reservation</a></li>
        <li></li>
      </div>
      <div class="footer-box">
        <h3>Contact</h3>
        <div class="contact">
          <span><i class="bx bxs-map"></i>Jln. Akses UI, Kelapa Dua, Kota Depok</span>
          <span><i class="bx bxs-phone"></i>081234567890</span>
          <span><i class="bx bxs-envelope"></i>Coffeepaste@gmail.com</span>
          <span><i class='bx bxs-time'></i>08.00 - 21.00 (Weekday) <br> 08.00 - 22.00 (Weekend)</span>
        </div>
      </div>
    </section> 

          <!--copyright-->
          <div class="copyright">
            <p>&#169; Kelompok 8 3KA01</p>
          </div>
        
        <!--Script to JS-->
        <script src="js/script.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/addChart.js"></script>    </body>
</html>