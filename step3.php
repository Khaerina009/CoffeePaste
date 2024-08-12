<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $products = $_POST['products'];
  $totalHarga = $_POST['totalHarga'];
  $tableNumber = $_POST['tableNumber'];
  $customerName = $_POST['customerName'];
  $customerNumber = $_POST['customerNumber'];
  $totalHargaFinal = isset($_POST['totalHargaFinal']) ? $_POST['totalHargaFinal'] : 0;

  }
  // Ambil nilai newValues dari $_POST
$newValuesJSON = isset($_POST['newValues']) ? $_POST['newValues'] : '';

// Decode JSON menjadi array PHP
$newValuesArray = json_decode($newValuesJSON, true);

?>


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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <!--Navbar-->
    <header class="step">
      <a href="#" class="logo">
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
      </div>

      <!--search box-->
      <div class="search-box">
        <input type="search" name="" id="" placeholder="Search Here" />
      </div>
    </header>

    <!--Step progress-->
    <section class="step-wizard">
      <ul class="step-wizard-list">
        <li class="step-wizard-item">
          <span class="progress-count">1</span>
          <span class="progress-label">Order Info</span>
        </li>
        <li class="step-wizard-item">
          <span class="progress-count">2</span>
          <span class="progress-label">Go to Cashier</span>
        </li>
        <li class="step-wizard-item current-item">
          <span class="progress-count">3</span>
          <span class="progress-label">Order Completed</span>
        </li>
      </ul>
    </section>

    <div class="enjoy"> <h5>Enjoy your meal!</h5>
      <div class="thank" id="thank">
        <div class="thank-img">
          <img src="img\TyBersih.png" alt="">
        </div>
</div>
        
      <div class="detail-order">
          <div class="box">
            <h4>Order Detail</h4>
            <?php
            // Menampilkan data di dalam detail-container
                      $totalHarga = 0;
                    foreach ($products as $productName => $productData) {
                        $quantity = $productData['quantity'];
                        $totalPrice = $productData['totalPrice'];
                        $image = $productData['image'];


                        $totalHarga += $totalPrice;

                        $decodedProductName = urldecode(urldecode($productName));
                    // Tambahkan bagian ini untuk menampilkan newValues
                    if (isset($newValuesArray[$decodedProductName])) {
                      $newValues = $newValuesArray[$decodedProductName];
                      $newQuantity= $newValues['newQuantity'] ;
                      $newTotalPrice=$newValues['newTotalPrice'] ;
                    }else {
                      $newQuantity= $productData['quantity'];
                      $newTotalPrice=$productData['totalPrice'];
            }
                        
            if ($newQuantity == 0) {
              continue;
          }

                // Mulai elemen item-container
                echo "<div class='item-container'>";
                        
                // Gambar produk
                echo "<div class='product-image'>";
                echo "<img src='" . urldecode($image) . "' class='product-image'><br>";
                echo "</div>";
                
                // Detail produk dan harga
                echo "<div class='details-container'>";
                echo "<div class='spanList'>";
                echo "<b>". urldecode(urldecode(urldecode($productName))) . "<br>"."</b>";
                echo "<span id='total_$productName'>Rp " . number_format($newTotalPrice, 0, ',', '.') . "</span><br>";
                echo "</div>";
                

                echo "<span class='quantity' id='quantity_$productName'>$newQuantity x</span><br>";
     // Selesai elemen details-container
                echo "</div>";
                
                // Selesai elemen item-container
                echo "</div>";
            }
                ?>
          </div>

          
      </div>
      <p class="come3">Come on, look at our menu again!</p>
        <div class="pesanlagi">
        <div class='item-container'>
        <div class='product-image'>
            <img src="img/a2.jpeg" class='product-image'><br>
        </div>
        <div class='spanList'>
       <b><span >Chicken Wings</span> <br></b>
          <span id='total_$productName'>Rp 25.000</span><br>
        </div>
    </div>
        <!--Cheese Pizza-->
        <div class='item-container'>
        <div class='product-image'>
            <img src="img/b1.jpeg" class='product-image'><br>
        </div>
        <div class='spanList'>
       <b> <span class="produkName">Dark Chocolate</span> <br> </b>
            <span id='total_$productName'class="produkName">Rp 20.000</span><br>
        </div>
    </div>
    <div class="pesan">
            <a href="products.php" class="bttm">View others</a>
        </div>
      </div>

      

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
    <script src="js\script.js"></script>
  </body>
</html>
