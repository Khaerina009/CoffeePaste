<?php
// pesanan.php

header('Content-Type: application/json');

// Ambil data yang dikirimkan
$products = $_POST['products'];
$totalHarga = $_POST['totalHarga'];
$tableNumber = $_POST['tableNumber'];
$customerName = $_POST['customerName'];
$customerNumber = $_POST['customerNumber'];

// Lakukan apa yang perlu dilakukan dengan data, misalnya menyimpan ke database
// ...

// Menyusun respons dalam format JSON
$response = array(
    'message' => 'Pesanan berhasil diproses!',
    'totalHarga' => $totalHarga,
    'tableNumber' => $tableNumber,
    'customerName' => $customerName,
    'customerNumber' => $customerNumber,
    'products' => $products
);

echo json_encode($response);

fetch('pesanan.php', {
    method: 'POST',
    body: formData
})
.then(response => response.json())
.then(data => {
    console.log('Data berhasil dikirim ke pesanan.php:', data);

    // Menampilkan informasi ke dalam elemen HTML atau melakukan tindakan lain
    document.getElementById('resultMessage').innerText = data.message;
    document.getElementById('totalHarga').innerText = 'Total Harga: ' + data.totalHarga;
    document.getElementById('tableNumber').innerText = 'Nomor Meja: ' + data.tableNumber;
    document.getElementById('customerName').innerText = 'Nama Pelanggan: ' + data.customerName;
    document.getElementById('customerNumber').innerText = 'Nomor Pelanggan: ' + data.customerNumber;

    // Menampilkan daftar produk
    var productList = document.getElementById('productList');
    productList.innerHTML = '<ul>';
    data.products.forEach(product => {
        productList.innerHTML += `<li>${product} - Quantity: ${product.quantity}, Total Price: ${product.totalPrice}</li>`;
    });
    productList.innerHTML += '</ul>';
})
.catch(error => {
    console.error('Gagal mengirim data ke pesanan.php:', error);
});



?>
<div id="resultMessage"></div>
<div id="totalHarga"></div>
<div id="tableNumber"></div>
<div id="customerName"></div>
<div id="customerNumber"></div>
<div id="productList"></div>
