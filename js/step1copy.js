// Fungsi untuk menaikkan kuantitas
function increaseQuantity(productName, totalPrice) {
    var quantityElement = document.getElementById('quantity_' + productName);
    var currentQuantity = parseInt(quantityElement.innerText);
    var newQuantity = currentQuantity + 1;
    quantityElement.innerText = newQuantity;

    // Lakukan operasi lain yang Anda butuhkan, misalnya pembaruan total harga
    // ...

    // Format dan setel total harga
    document.getElementById('total_' + productName).innerHTML = formatCurrency(totalPrice * newQuantity);
    // Perbarui total harga
    updateTotalHarga();

}

// Fungsi untuk menurunkan kuantitas
function decreaseQuantity(productName, totalPrice) {
    var quantityElement = document.getElementById('quantity_' + productName);
    var currentQuantity = parseInt(quantityElement.innerText);

    // Pastikan kuantitas tidak kurang dari 1
    if (currentQuantity > 1) {
        var newQuantity = currentQuantity - 1;
        quantityElement.innerText = newQuantity;

        // Lakukan operasi lain yang Anda butuhkan, misalnya pembaruan total harga
        // ...

        // Format dan setel total harga
        document.getElementById('total_' + productName).innerHTML = formatCurrency(totalPrice * newQuantity);
        // Perbarui total harga
        updateTotalHarga();

    }
}

function updateTotalHarga() {
    // Dapatkan semua elemen dengan class 'hargaPerProduk'
    var hargaPerProdukElements = document.getElementsByClassName('hargaPerProduk');
    var promoDropdown = document.getElementById("promoDropdown");
    var selectedPromo = promoDropdown.options[promoDropdown.selectedIndex].value;

    // Inisialisasi total harga
    var totalHarga = 0;

    // Iterasi melalui setiap elemen
    for (var i = 0; i < hargaPerProdukElements.length; i++) {
        // Dapatkan harga per produk dari atribut data-harga
        var hargaPerProduk = parseFloat(hargaPerProdukElements[i].dataset.harga);

        // Dapatkan elemen kuantitas dan total harga
        var productName = hargaPerProdukElements[i].id.split('_')[1];
        var quantityElement = document.getElementById('quantity_' + productName);
        var currentQuantity = parseInt(quantityElement.innerText);

        // Hitung total harga per produk
        var totalHargaPerProduk = hargaPerProduk * currentQuantity;

        // Tambahkan ke total harga
        totalHarga += totalHargaPerProduk;
    }

    // Hitung pajak berdasarkan total harga yang baru
    var taxPercentage = 10; // Persentase pajak
    var tax = (totalHarga * taxPercentage) / 100;

    // Format totalHarga sebagai mata uang dan tambahkan "Rp" di depannya
    var formattedTotalHarga = 'Rp ' + totalHarga.toLocaleString("id-ID");

     // Menghitung diskon 30%
     var diskon = (30 / 100) * (totalHarga+tax);

     // Menghitung total harga setelah diskon
     var totalHargaSetelahDiskon = (totalHarga+tax) - diskon;

    // Perbarui tampilan total harga
    document.getElementById('totalHarga').innerText = 'Total Harga: ' + formattedTotalHarga;

    // Perbarui tampilan pajak dengan menggunakan ID
    document.getElementById('taxElement').innerText = 'Pajak (' + taxPercentage + '%): Rp ' + tax.toLocaleString("id-ID");


    //perbarui tampilan pajak setelah dihitung total harga menggunakan ID
    document.getElementById('setelahPajak').innerText = 'Total Harga (setelah Pajak) : Rp ' + (totalHarga + tax).toLocaleString("id-ID");

  if(selectedPromo == "30percent"){
    // Memperbarui tampilan total harga setelah diskon di dalam elemen 'setelahPajak' dan diskon 
  document.getElementById('diskon30').innerText = 'Diskon 30%: Rp ' + diskon.toLocaleString("id-ID");
  document.getElementById('FinalHarga').innerText = 'Total yang harus Dibayar: Rp ' + totalHargaSetelahDiskon.toLocaleString("id-ID");
  
  } else {
    // Jika promo yang dipilih bukan "30percent", hapus inner text dari elemen 'diskon30' dan 'FinalHarga'
    document.getElementById('diskon30').innerText = '';
    document.getElementById('FinalHarga').innerText = '';
  }
}



// Fungsi untuk memformat mata uang
function formatCurrency(value) {
    // Modifikasi sesuai dengan kebutuhan Anda
    return 'Rp ' + number_format(value, 0, ',', '.');
}

// Fungsi untuk memformat angka sebagai mata uang
function number_format(number, decimals, decPoint, thousandsSep) {
    decimals = decimals || 0;
    number = parseFloat(number);

    var stringNumber = number.toFixed(decimals);

    var parts = stringNumber.split('.');
    var fnum = parts[0];
    var decimals = parts[1] ? (decPoint || '.') + parts[1] : '';

    return fnum.replace(/(\d)(?=(?:\d{3})+$)/g, '$1' + (thousandsSep || ',')) + decimals;
}

function applyPromo() {
  // Dapatkan nilai terpilih dari dropdown
  var promoDropdown = document.getElementById("promoDropdown");
  var selectedPromo = promoDropdown.options[promoDropdown.selectedIndex].value;

  // Periksa jenis promo dan lakukan tindakan sesuai
  if (selectedPromo === "30percent") {
      // Mengambil nilai dari elemen dengan ID 'setelahPajak'
      var totalHargaSetelahPajakElement = document.getElementById('setelahPajak');

      // Periksa apakah elemen dengan ID 'setelahPajak' ditemukan
      if (totalHargaSetelahPajakElement) {
          // Dapatkan nilai teks dan hilangkan format mata uang
          var totalHargaSetelahPajakText = totalHargaSetelahPajakElement.innerText;
          var totalHargaSetelahPajak = parseFloat(totalHargaSetelahPajakText.replace(/[^\d,.]/g, '').replace(',', '.'));

          // Pengecekan apakah berhasil parsing
              // Hitung diskon 30%
              var diskon = (0.3) * totalHargaSetelahPajak;

              // Hitung total harga setelah diskon
              var totalHargaSetelahDiskon = totalHargaSetelahPajak - diskon;

              // Menampilkan konfirmasi dengan alert
              alert("Promo Diskon 30% telah diterapkan!\nDiskon: Rp " + diskon.toLocaleString("id-ID", { minimumFractionDigits: 3 }).replace(',','.') + "\nTotal Harga Setelah Diskon: Rp " + totalHargaSetelahDiskon.toLocaleString("id-ID", {minimumFractionDigits:3}).replace(',','.'));

              // Memperbarui tampilan total harga setelah diskon di dalam elemen 'setelahPajak' dan diskon
              document.getElementById('diskon30').innerText = 'Diskon 30%: Rp ' + diskon.toLocaleString("id-ID");
              document.getElementById('FinalHarga').innerText = 'Total yang harus Dibayar: Rp ' + totalHargaSetelahDiskon.toLocaleString("id-ID");

              // Memperbarui nilai totalHarga dan tax agar sesuai dengan totalHargaSetelahDiskon
              var taxPercentage = 10;
              totalHarga = totalHargaSetelahDiskon;
              tax = (totalHarga * taxPercentage) / 100;

              // Memanggil fungsi updateTotalHarga untuk memperbarui tampilan
              updateTotalHarga();
      }
  

    } else if (selectedPromo === "freeWings") {
      // Promo Gratis Chicken Wings
      alert("Promo Gratis Chicken Wings telah diterapkan!");
      document.getElementById('diskon30').innerText = '';
      document.getElementById('FinalHarga').innerText = '';
    } else if (selectedPromo === "saturdayPromo") {
      // Promo Saturday Promo
      alert("Promo Saturday Promo telah diterapkan!");
      document.getElementById('diskon30').innerText = '';
      document.getElementById('FinalHarga').innerText = '';
    } else {
      // Tidak ada promo terpilih
      alert("Silakan pilih promo terlebih dahulu.");
    }
  }
  function prepareDataForSubmission() {
    // Mengumpulkan data dari setiap item dalam keranjang
    var products = {};

    $(".item-container").each(function () {
        var productName = $(this).find(".spanList").text().trim();
        var quantity = parseInt($(this).find(".quantity").text().trim());
        var hargaPerProduk = parseInt($(this).find(".hargaPerProduk").data("harga"));

        products[productName] = {
            quantity: quantity,
            hargaPerProduk: hargaPerProduk
        };
    });

    // Mengumpulkan data tambahan seperti nomor meja, nama pelanggan, dll.
    var tableNumber = $("#tableNumberDropdown").val();
    var customerName = $("#customerNameInput").val();
    var customerNumber = $("#customerNumberInput").val();

    // Membuat objek payload
    var payload = {
        products: products,
        totalHarga:totalHarga,
        tableNumber: tableNumber,
        customerName: customerName,
        customerNumber: customerNumber
    };

    // Mengganti nilai input hidden pada formulir
    $("#orderForm input[name='products']").val(JSON.stringify(payload.products));
    $("#orderForm input[name='totalHarga']").val(payload.totalHarga);
    $("#orderForm input[name='tableNumber']").val(payload.tableNumber);
    $("#orderForm input[name='customerName']").val(payload.customerName);
    $("#orderForm input[name='customerNumber']").val(payload.customerNumber);
     // Menyubmit formulir secara manual
     $("#orderForm").submit();
}





  