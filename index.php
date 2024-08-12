<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CoffeePaste</title>
    
    <!--Link CSS-->
    <link rel="stylesheet" href="css\style.css" />
    <!--Box Icons-->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
  <body>
    <!--Navbar-->
    <header>
      <a href="index.php" class="logo">
        <img src="img\logo.png" alt="" />
        <h2>CoffeePaste</h2>
      </a>
      <!--Menu Icon-->
      <i class="bx bx-menu" id="menu-icon"></i>
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

    <!--Home-->
    <section class="home" id="home">
      <div class="home-text">
      <h1>Inspired by The World<br />Dedicated For You</h1>
        <p>Your coffee toffee are waiting you!</p>
        <a href="products.php" class="btn">Order Now!</a>
      </div>
      <div class="home-img">
        <img src="img\main.png" alt="" />
      </div>
    </section>

    <!--About-->
    <section class="about" id="about">
      <div class="about-img">
        <img src="img\about.jpg" alt="">
      </div>
      <div class="about-text">
        <a href="#about"></a>
        <h2>Our History</h2>
        <p>
        In every cup of coffee we serve, there is harmony between beans that have experienced a long journey and loving hands. Like life, coffee teaches us that in every long and hard-fought process, 
        we can find pleasure in every sip we take. We, here, share this philosophy in the hope that every drop of coffee will remind you to enjoy the small moments that make up your life
        </p>
        <p>
        Like a cup of coffee that is fragrant and full of taste, 
        this life also requires patience, hard work, and the perfect combination of time and feelings to create warm happiness in every sip of life.
        </p>

        <a href="about.php" class="btn">Learn More</a>
      </div>
    </section>
    
    <!--Customer Section-->
    <section class="customers" id="customers">
      <div class="opinion">
        <h2>What they said about us?</h2>
      </div>
      <!--container-->
      <div class="customers-container">
        <div class="box">
          <h2>Varellino Rivan</h2>
          <div class="starts">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <p>
          the atmosphere is modern industrial, 
          drinking coffee while doing work is very comfortable, the coffee is also quite good, the level of doneness of the chicken wings is very right
          </p>
         
        </div>

        <div class="box">
          <h2>Khaerina Fadillah</h2>
          <div class="starts">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bx-star"></i>
          </div>
          <p>
          I really enjoy the quality of their coffee, especially their rich and aromatic Americano. 
          Not only coffee, they also provide a variety of teas and delicious snacks, such as French fries and cheese rolls which are perfect to accompany drinks.
          </p>
        </div>

        <div class="box">
          <h2>Muhammad Rizky</h2>
          <div class="starts">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
            <i class="bx bx-star"></i>
          </div>
          <p>
          The place is very comfortable. Spacious room with modern and comfortable decoration. I love that they arranged the tables and chairs, giving enough privacy to talk or work. 
          Apart from that, the atmosphere is also calm, so this place is very suitable for spending time relaxing while enjoying coffee or doing work.
          </p>
        </div>
      </div>
    </section>

    <!--Promo-->
    <section class="promos" id="promo">
      <div class="promo">
        <div class="judul1"><h2>TODAY PROMOS!</h2></div>
        <div class="judul2"><h2>TODAY PROMOS!</h2></div>

        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="img\pr1.png" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
              <p>• Promo only applies to Matcha Latte orders<br></p>
              <p>• Promo is only valid when dine-in<br></p>
              <p>• Promo can only be used once<br></p>
              <a href="products.php" class="btn">Order Now!</a>
            </div>
          </div>
          </div>

          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img\pr2.png" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <p>• Valid for every minimum payment of IDR 50,000 <br></p>
                <p>• Promo is only valid when dine-in<br></p>
                <p>• Promo can only be used once<br></p>
                <a href="products.php" class="btn">Order Now!</a>
              </div>
            </div>
          </div>

          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img\pr3.png" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back-1">
                <p>• Valid only on Saturdays every 14.00 - 16.00 WIB<br></p>
                <p>• Promo is only valid when dine-in<br></p>
                <p>• Promo can only be used once<br></p>
                <a href="products.php" class="btn">Order Now!</a>
              </div>
            </div>
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
    <script src="js/addChart.js"></script>
  </body>
</html>
