<?php
$cartItems = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['products'])) {
    $cartItems = $_GET['products'];
}

function increaseQuantity(&$cartItems, $productName) {
    if (isset($cartItems[$productName])) {
        $hargaProdukPerItem = $cartItems[$productName]['totalPrice'] / $cartItems[$productName]['quantity'];
        $cartItems[$productName]['quantity']++;
        $cartItems[$productName]['totalPrice'] += $hargaProdukPerItem;
    }

    return $cartItems;
}

function decreaseQuantity(&$cartItems, $productName) {
    if (isset($cartItems[$productName]) && $cartItems[$productName]['quantity'] > 1) {
        $hargaProdukPerItem = $cartItems[$productName]['totalPrice'] / $cartItems[$productName]['quantity'];
        $cartItems[$productName]['quantity']--;
        $cartItems[$productName]['totalPrice'] -= $hargaProdukPerItem;
    }

    return $cartItems;
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
    <body>
        <!--Navbar--> 
        <header class="products">
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
              <div class="shopping">
                <i class="bx bx-cart-alt"></i>
                <span class="quantity">0</span>
              </div>
              <i class="bx bx-search" id="search-icon"></i>
            </div>
    
            <!--search box-->
            <div class="search-box">
                <input type="search" name="" id="" placeholder="Search Here">
            </div>
        </header>
        
            <div class="list">
              
            </div>
            <!--Add to chart card-->
            <div class="card">
              <h1>Your Cart</h1>
              <ul class="listCard">
              </ul>
              <div class="checkOut">
                <div class="total">
                  <h3><a href="step1.php">Order</a></h3>
                </div>
                <div class="closeShopping">Close</div>
              </div>
            </div>

        <!--Step progress-->
        <section class="step-wizard">
            <ul class="step-wizard-list">
                <li class="step-wizard-item current-item">
                    <span class="progress-count">1</span>
                    <span class="progress-label">Payment</span>
                </li>
                <li class="step-wizard-item current-item">
                    <span class="progress-count">2</span>
                    <span class="progress-label">Waiting an Order</span>
                </li>
                <li class="step-wizard-item current-item">
                    <span class="progress-count">3</span>
                    <span class="progress-label">Take an Order</span>
                </li>
            </ul>
        </section>

        <section class="summary">
            <div class="detail-container">
                <div class="box">
                  <h2>Order Detail</h2>
                  <br>
                  <?php
            // Menampilkan data di dalam detail-container
            $totalHarga = 0;
            foreach ($cartItems as $productName => $productData) {
                $quantity = $productData['quantity'];
                $totalPrice = $productData['totalPrice'];
                $image = $productData['image'];
            
                $totalHarga += $totalPrice;
            
                // Mulai elemen item-container
                echo "<div class='item-container'>";
            
                // Gambar produk
                echo "<div class='product-image'>";
                echo "<img src='" . urldecode($image) . "' class='product-image'><br>";
                echo "</div>";
            
                // Detail produk dan harga
                echo "<div class='details-container'>";
                echo "<div class='spanList'>";
                echo urldecode($productName) . "<br>";
                echo "<span id='total_$productName'>Rp " . number_format($totalPrice, 0, ',', '.') . "</span><br>";
                echo "</div>";
            
                // Tombol decrease dan increase
               // Sebelum elemen details-container
              // Tombol decrease dan increase
      
              echo "<button id='minButton_$productName' class='minButton' onclick='decreaseQuantity(\"$productName\", $totalPrice)'>-</button>";
              echo "<span class='quantity' id='quantity_$productName'>$quantity</span>";
              echo "<button id='plusButton_$productName' class='plusButton' onclick='increaseQuantity(\"$productName\", $totalPrice)'>+</button>";
              echo "<span id='hargaPerProduk_$productName' class='hargaPerProduk' data-harga='$totalPrice' style='display: none;'></span>";
              
              
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
              <h2>Apply Promos<hr></h2>
            </div>
            <!--Diisi ajaa nih dropdownnya-->
          <select id="promoDropdown">
          <option value="" disabled selected>Select Promo</option>
            <option value="30percent">Diskon 30%</option>
            <option value="freeWings">Gratis Chicken Wings</option>
            <option value="saturdayPromo">Saturday Promo</option>
          </select>
          <button onclick="applyPromo()" id="buttonPromo" >Terapkan Promo</button>
          </div>

          <!--Total-->
          <div class="total-container">
            <div class="total-box">
              <h2>Payment Summary<hr></h2>
              <?php
              // Menampilkan total harga di dalam detail-container
              echo "<div id='totalHarga' class='total-harga'>";
              echo "Total : Rp " . number_format($totalHarga, 0, ',', '.') . "<br>";
              echo "</div>";
              ?>

              <div class="tax">
                <?php 
                    // Mendapatkan total harga dari data PHP Anda
                    // Hitung pajak berdasarkan total harga yang baru
                    $taxPercentage = 10; // Persentase pajak
                    $tax = ($totalHarga * $taxPercentage) / 100;

                    // Format totalHarga sebagai mata uang dan tambahkan "Rp" di depannya
                    $formattedTotalHarga = number_format($totalHarga + $tax, 0, ',', '.');
                    $formattedTax = number_format($tax, 0, ',', '.');

                    // Menampilkan pajak
                    echo "<div class='tax' id='taxElement'>";
                    echo "Pajak ({$taxPercentage}%): Rp {$formattedTax}<br>";
                    echo "</div>";
                    // Menampilkan total harga setelah pajak
                    echo "<div class='total-harga-setelah-pajak' id='setelahPajak'>";
                    echo "<br>Total Harga (Setelah Pajak): Rp {$formattedTotalHarga} <br>";
                    echo "</div>";

                    echo "<div class='diskon30' id='diskon30'>";
                    echo "</div>";
                    echo "<div class='FinalHarga' id='FinalHarga'>";
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
              <select id="tableNumberDropdown">
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
        <input type="text" id="customerNameInput" name="customerName" placeholder="Name">
        <input type="text" id="customerNumberInput" name="customerNumber" placeholder="Phone Number">
    </div>
</div>

          <form id="orderForm" action="step2.php" method="POST">
    <?php foreach ($cartItems as $productName => $productData) { ?>
        <input type="hidden" name="products[<?php echo urlencode($productName); ?>][quantity]" value="<?php echo $productData['quantity']; ?>">
        <input type="hidden" name="products[<?php echo urlencode($productName); ?>][totalPrice]" value="<?php echo $productData['totalPrice']; ?>">
        <input type="hidden" name="products[<?php echo urlencode($productName); ?>][image]" value="<?php echo $productData['image']; ?>">
    <?php } ?>
    <input type="hidden" name="totalHarga" value="<?php echo $totalHarga; ?>">

     <input type="hidden" name="tableNumber" id="tableNumber" value="">
    <input type="hidden" name="customerName" id="customerName" value="">
    <input type="hidden" name="customerNumber" id="customerNumber" value="">

    <div class="button-pay">
        <button type="button" class="btn" onclick="prepareDataForSubmission()">Pay an Order</button>
    </div>
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
                <a href="#"><i class="bx bxl-instagram"></i></a>
                <a href="#"><i class="bx bxl-tiktok"></i></a>
              </div>
            </div>
            <div class="footer-box">
              <h3>Support</h3>
              <li><a href="about.php">Gallery</a></li>
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

    </body>
</html>
