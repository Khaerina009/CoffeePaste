<?php
    // Menangkap nilai dari POST
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $hours = isset($_POST['hours']) ? $_POST['hours'] : 'hour-select';
    $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : '';
    $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
    $persons = isset($_POST['persons']) ? $_POST['persons'] : '';

    

$host = "localhost";
$dbname = "db_barang";  // Nama database Anda
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil nilai dari formulir
$date = $_POST['date'];
$hours = $_POST['hours'];
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$persons = $_POST['persons'];


if (isset($_POST['proses'])) {
    // Periksa apakah data dengan date dan hours yang sama sudah ada
    $checkQuery = "SELECT * FROM reservations WHERE date='$date' AND hour='$hours'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        // Data sudah ada, tampilkan pesan alert
        echo "<script>alert('Reservation for the selected date and hour already exists. Please choose a different date or hour.');</script>";
         // Kosongkan nilai pada kolom input
         $date = '';
         $hours = 'hour-select';
         $full_name = '';
         $phone_number = '';
         $persons = '';
    } else {
        // Data belum ada, lakukan insert
        $insertQuery = "INSERT INTO reservations SET
            date='$date',
            hour='$hours',
            full_name='$full_name',
            phone_number='$phone_number',
            persons='$persons'
        ";

        if ($conn->query($insertQuery) === TRUE) {
            echo "<script>alert('Reservation successful!');</script>";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}
?>


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

        </div>
        <i class="bx bx-search" id="search-icon"></i>
      </div>
      <!--search box-->
      <div class="search-box">
        <input type="text" name="" id="searchInput" placeholder="Search Here" />
        <div id="searchResults"></div>
      </div>
    </header>

        <section class = "banner">
            <h2>BOOK YOUR TABLE NOW</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <h3>Reservation Details</h3>
                    <form method="post" action="reservation-after.php">
        <div class="form-row">
            <input type="date" name="date" placeholder="Date" required value="<?php echo $date; ?>" readonly>
            <select name="hours" id="hours" required disabled>
            <option value="hour-select" selected>Select Hour</option>
            <option value="10:00" <?php echo ($hours == '10:00') ? 'selected' : ''; ?>>10:00</option>
            <option value="12:00" <?php echo ($hours == '12:00') ? 'selected' : ''; ?>>12:00</option>
            <option value="14:00" <?php echo ($hours == '14:00') ? 'selected' : ''; ?>>14:00</option>
            <option value="16:00" <?php echo ($hours == '16:00') ? 'selected' : ''; ?>>16:00</option>
            <option value="18:00" <?php echo ($hours == '18:00') ? 'selected' : ''; ?>>18:00</option>
            <option value="20:00" <?php echo ($hours == '20:00') ? 'selected' : ''; ?>>20:00</option>
        </select>
        </div>

        <div class="form-row">
            <input type="text" name="full_name" placeholder="Full Name" required value="<?php echo $full_name; ?>" readonly>
            <input type="text" name="phone_number" placeholder="Phone Number" required value="<?php echo $phone_number; ?>" readonly>
        </div>

        <div class="form-row">
            <input type="number" name="persons" placeholder="Persons" max="15" min="1" required value="<?php echo $persons; ?>" readonly>
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
      <script src="js/script.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/addChart.js"></script>   
   </body>
</html>

