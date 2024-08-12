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
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>     
    <body>
    <header>
        <!--Navbar--> 
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
    </header>

    
        <section class = "banner">
            <h2>BOOK YOUR TABLE NOW</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <h3>Reservation</h3>
                    <form method="post" action="reservation-after.php">
                <div class="form-row">
                 <input type="date" name="date" placeholder="Date" required>
                    <select name="hours" id="hours"required>
                        <option value="hour-select" disabled selected>Select Hour</option>
                        <option value="10:00">10:00</option>
                        <option value="12:00">12:00</option>
                        <option value="14:00">14:00</option>
                        <option value="16:00">16:00</option>
                        <option value="18:00">18:00</option>
                        <option value="20:00">20:00</option>
                    </select>
                </div>

                <div class="form-row">
                    <input type="text" name="full_name" placeholder="Full Name" required>
                    <input type="text" name="phone_number" placeholder="Phone Number" required>
                </div>

                <div class="form-row">
                    <input type="number" name="persons" placeholder="Persons" max="15" min="1" required>
                    <input type="submit" value="Book Now" name="proses">
                    <input id="hapus" type="reset" value="Reset">
                </div>
            </form>

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
      <!--Script to JS-->
<script src="js\script.js"></script>
<script src="js\ajax.js"></script>
    <script src="js\addChart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var submitButton = document.querySelector('input[name="proses"]');
        submitButton.addEventListener('click', function (event) {
            var hour = document.getElementById('hours').value;

            if (hour === 'hour-select') {
                alert('Please select a valid hour.');
                event.preventDefault(); // Mencegah pengiriman formulir jika validasi gagal
            }
        });
    });
</script>

    </body>
</html>
