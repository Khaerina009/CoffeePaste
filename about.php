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
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
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

        <!--About-->
        <section class="journey" id="journey">
            <div class="heading-abt">
                <center><h2>Our Journey</h2></center>
            </div>
            <div class="timeline">
                <div class="timeline-container left-container">
                    <div class="text-box">
                        <h2>2020 - 2021</h2>
                        <p>At the beginning of its birth, Coffeepaste was a symbol of resilience in the pandemic storm, showing that when the world is dark, a pinch of hope and love can still grow.</p>
                    </div>
                </div>
                <div class="timeline-container right-container">
                    <div class="text-box">
                        <h2>2021 - 2022</h2>
                        <p>In the following year, Coffeepaste became a place of healing, bringing communities together after a crisis, teaching us that togetherness is the key to overcoming challenges.</p>
                    </div>
                </div>
                <div class="timeline-container left-container">
                    <div class="text-box">
                        <h2>2022 - Now</h2>
                        <p>Coffeepaste is now a symbol of a life's journey full of meaning. It inspires us to pursue happiness, celebrate life, and enjoy the present moment in the aroma of fragrant coffee and a friendly atmosphere.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="reason">
            <div class="heading-reason">
                <h2>WHY YOU SHOULD CHOOSE <span>US</span>?</h2>
            </div>
            <div class="list">
                <h4>Cause we have: </h4>
                <ul>
                    <li>• <b>Concept</b> <br> Our coffeeshop has a unique and interesting concept that differentiates it from other coffee shops. A clear concept can attract customers and make them want to come back.</li>
                    <li>• <b>Quality of Coffee</b><br> Our coffeeshop serves high quality coffee that is delicious and satisfying. This is important because customers are looking for a good cup of coffee when they visit our premises</li>
                    <li>• <b>Good atmosphere</b> <br>Our coffeeshop has a cozy and comfortable atmosphere that makes customers feel relaxed and at home. This is important because customers often visit our CoffeeShop to socialize, work or study.</li>
                    <li>• <b>Menu</b> <br> Our coffeeshop offers a wide selection of food and drinks that cater to different tastes and preferences. This is important because customers are looking for places where they can find something they like to eat or drink.</li>
                    <br><br><br>
                  </ul>
                
            </div>
            <div class="image-seed">
                <img src="img\Biji kopi.jpg">
            </div>
        </section>

        <section class="gallery" id="gallery">
            <div class="heading-gallery">
                <div class="judul"><h2>OUR GALLERY</h2></div>
              <div class="container">
                <div class="slider-wrapper">
                  <button
                    id="prev-slide"
                    class="slide-button material-symbols-rounded"
                  >chevron_left
                  </button>
                  <div class="image-list" id="image-list">
                    <img src="img/g1.jpg" alt="Outdoor" class="img-item" />
                    <img src="img/g2.jpg" alt="Our Cashier" class="img-item" />
                    <img src="img/g3.jpg" alt="Outdoor" class="img-item" />
                    <img src="img/g4.jpg" alt="Our Cafe" class="img-item" />
                    <img src="img/g5.jpg" alt="Toilet" class="img-item" />
                    <img src="img/g6.jpg" alt="Musholla" class="img-item" />
                  </div>
                  <button
                    id="next-slide"
                    class="slide-button material-symbols-rounded"
                  >chevron_right
                  </button>
                </div>
                <div class="slider-scrollbar">
                  <div class="'scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                  </div>
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
    <script src="js/addChart.js"></script>    </body>
</html>