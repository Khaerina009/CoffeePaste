<?php
$cartItems = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['products'])) {
    $cartItems = $_GET['products'];
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
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script src="js/step1.js"></script>
        
    
    </head>     
    <body class="step">
        <!--Navbar--> 
        <header class="step">
            <a href="#" class="logo">
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
            </div>
    
            <!--search box-->
            <div class="search-box">
                <input type="search" name="" id="" placeholder="Search Here">
            </div>
        </header>

        <!--Step progress-->
        <section class="step-wizard">
      <ul class="step-wizard-list">
        <li class="step-wizard-item current-item">
          <span class="progress-count">1</span>
          <span class="progress-label">Order Info</span>
        </li>
        <li class="step-wizard-item current-item">
          <span class="progress-count">2</span>
          <span class="progress-label">Go to Cashier</span>
        </li>
        <li class="step-wizard-item current-item">
          <span class="progress-count">3</span>
          <span class="progress-label">Order Completed</span>
        </li>
      </ul>
    </section>

        <section class="summary">
            <div class="detail-container">
                <div class="box">
                  <h2>Order Detail</h2>
                  <br>
                  
                  <?php
$totalHarga = 0;
foreach ($cartItems as $productName => $productData) {
    $quantity = $productData['quantity'];
    $totalPrice = $productData['totalPrice'];
    $image = $productData['image'];

    // Skip jika quantity adalah 0
    if ($quantity == 0 ) {
      continue;
  }

    $totalHarga += $totalPrice;

    // Menghindari pembagian dengan nol
    $hargaProdukPerItem = ($quantity > 0) ? $totalPrice / $quantity : 0;

    // Menyimpan harga per produk ke dalam array
    $hargaPerProdukArray[$productName] = $hargaProdukPerItem;

    // Mulai elemen item-container
    echo "<div class='item-container' id='itemContainer_$productName'>";

    // Gambar produk
    echo "<div class='product-image'>";
    echo "<img src='" . urldecode($image) . "' class='product-image'><br>";
    echo "</div>";

    // Detail produk dan harga
    echo "<div class='details-container'>";
    echo "<div class='spanList'>";
    echo "<b>".urldecode($productName) . "</b><br>";
    echo "<span id='total_$productName'>Rp " . number_format($totalPrice, 0, ',', '.') . "</span><br>";
    echo "</div>";

    // Tombol decrease dan increase
    // Sebelum elemen details-container
    // Tombol decrease dan increase

    echo "<button id='minButton_$productName' class='minButton' onclick='decreaseQuantity(\"$productName\", $totalPrice)'>-</button>";
    echo "<span class='quantity' id='quantity_$productName'>$quantity</span>";
    echo "<button id='plusButton_$productName' class='plusButton' onclick='increaseQuantity(\"$productName\", $totalPrice)'>+</button>";
    echo "<span id='hargaTotalProduk_$productName' class='hargaTotalProduk' data-harga='$totalPrice' style='display: none;'></span>";
    echo " <span class='hargaPerProduk' id='hargaPerProduk_$productName' data-harga='$hargaProdukPerItem'></span>";

    // Selesai elemen details-container
    echo "</div>";

    // Selesai elemen item-container
    echo "</div>";
}
?>

    
                </div>
            </div>
            
        <!--Apply Promo-->
          <div class="promo-container">
            <div class="promo-box">
              <h2>Apply Promo<hr></h2>
            </div>
            <!--Diisi ajaa nih dropdownnya-->
          <select id="promoDropdown">
          <option value="none" disabled selected>Select Promo</option>
            <option value="30percent">Discount 30%</option>
            <option value="free Chicken Wings">Free Chicken Wings</option>
            <option value="saturdayPromo">Saturday Free Upsize</option>
          </select>
          <button onclick="applyPromo()" id="buttonPromo" >Select Promo</button>
          </div>

          <!--Total-->
          <div class="total-container">
            <div class="total-box">
              <h2>Payment Summary<hr></h2>
              <?php
              // Menampilkan total harga di dalam detail-container
              echo "<div id='totalHarga' class='total-harga'>";
              echo "Subtotal "."&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;". "Rp " . number_format($totalHarga, 0, ',', '.') . "<br>";
              echo "</div>";
              ?>

              <div class="tax">
                <?php 
                    // Mendapatkan total harga dari data PHP Anda
                    // Hitung pajak berdasarkan total harga yang baru
                    $taxPercentage = 11; // Persentase pajak
                    $tax = ($totalHarga * $taxPercentage) / 100;


                    // Format totalHarga sebagai mata uang dan tambahkan "Rp" di depannya
                    $formattedTotalHarga = number_format($totalHarga + $tax, 0, ',', '.');
                    $formattedTax = number_format($tax, 0, ',', '.');

                    // Menampilkan pajak
                    echo "<div class='tax' id='taxElement'>";
                    echo "Tax ({$taxPercentage}%) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                     Rp {$formattedTax}<br>";
                    echo "</div>";
                    // Menampilkan total harga setelah pajak
                    echo "<div class='total-harga-setelah-pajak' id='setelahPajak'>";
                    //echo "<br>Total Harga (Setelah Pajak): Rp {$formattedTotalHarga} <br>";
                    echo "</div>";

                    echo "<div class='diskon30' id='diskon30'>";
                    echo "</div>";
                    echo "<div class='garis'>";
                    echo "<hr>";
                    echo "</div>";
                    echo "<div class='FinalHarga' id='FinalHarga'>";
                    echo "TOTAL <span style='white-space: pre;''>                                                           </span>  Rp {$formattedTotalHarga}" ;
                    echo "</div>"
                ?>   
              </div>
            </div>
          </div>

          <!--No table-->
          <div class="table-container">
            <div class="table-box">
              <h2>No. Table<hr></h2>
              <h4>Fill your table number</h4>
              <select id="tableNumberDropdown" required>
              <option value="" disabled selected>Select Table Number</option>

              <?php
                for ($i = 1; $i <= 15; $i++) {
                  echo "<option value='{$i}'>{$i}</option>";
                }
              ?>
              </select>
            </div>
          </div>

         <!-- Informatipn customer -->
<div class="cust-container">
    <div class="cust-box">
        <h2>Information Customer<hr></h2>
        <input type="text" id="customerNameInput" name="customerName" placeholder="Name" required>
        <input type="text" id="customerNumberInput" name="customerNumber" placeholder="Phone Number" required>
    </div>
   </div>


<!--Button-->
<div class="button-pay">
        <button type="button" class="btn" onclick="prepareDataForSubmission()">Pay an Order</button>
</div>

          <form id="orderForm" action="step2.php" method="POST">
    <?php foreach ($cartItems as $productName => $productData) { ?>
        <input type="hidden" name="products[<?php echo urlencode($productName); ?>][quantity]" value="<?php echo $productData['quantity']; ?>">
        <input type="hidden" name="products[<?php echo urlencode($productName); ?>][totalPrice]" value="<?php echo $productData['totalPrice']; ?>">
        <input type="hidden" name="products[<?php echo urlencode($productName); ?>][image]" value="<?php echo $productData['image']; ?>">
        <input type="hidden" name="newValues" id="newValuesInput" value="<?php echo json_encode($newValuesArray); ?>">

    <?php } ?>
    <input type="hidden" name="totalHarga" value="<?php echo $totalHarga; ?>">

     <input type="hidden" name="tableNumber" id="tableNumber" value="">
    <input type="hidden" name="customerName" id="customerName" value="">
    <input type="hidden" name="customerNumber" id="customerNumber" value="">
    <input type="hidden" name="selectedPromo" id="selectedPromo" value="">
    <input type="hidden" name="priceToPay" id="priceToPay" value="">
    


</form>
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
        <script src="js\script.js"></script>
        <script>
          $('.dropdown-menu').click(function(e){
            e.preventDefault();
            e.stopPropagation();
            $(this).toggleClass('expan');
            $("#" + $(e.target).attr('for')).prop('checked', true);
          })

          $(document).click(function(){
            $('.dropdown-menu').removeClass('expan');
    });
        </script>
                <script>
                      var hargaPerProdukArray = <?php echo json_encode($hargaPerProdukArray); ?>;
                </script>

    </body>
</html>
