<?php

//Menggunakan Array, didalamnya ada array pada barang, harga, dan jumlah produk yang dipesan
$items = [
    ["nama" => "Buku", "harga" => 5000, "jumlah" => 5],
    ["nama" => "Pulpen", "harga" => 3000, "jumlah" => 12],
    ["nama" => "Pensil", "harga" => 1000, "jumlah" => 4]
];

//Menggunakan Function Foreach, Inisialisasi variabel total untuk menyimpan jumlah total harga belanja
function hitungTotalHarga($items)
{
    $total = 0;
     // Loop melalui array $items untuk menghitung subtotal dari setiap barang
    foreach ($items as $item) {
        $subtotal = $item['harga'] * $item['jumlah'];  // Mengalikan harga dengan jumlah untuk setiap barang
        $total += $subtotal; // Menambahkan subtotal ke total
    }
    return $total;
}

//
function hitungDiskon($total)
{
     // Inisialisasi variabel diskon dengan nilai awal 0
    $diskon = 0;
    //Cek apakah total belanja lebih dari 10000
    if ($total > 10000) {
        $diskon = $total * 0.1; // Jika iya, diskon adalah 10% dari total, dalam desimal 0.1
    }
    return $diskon; //Mengembalikan nilai diskon
}

function tampilkanDetailPembelian($items)
{
    //Loop melalui array $items untuk menampilkan detail setiap barang
    foreach ($items as $item) {
         //Menampilkan nama barang, jumlah, harga per item, dan total harga barang
        echo "Nama Barang: {$item['nama']}, ";
        echo "Jumlah: {$item['jumlah']}, ";
        echo "Harga per Item: Rp" . $item['harga'] . ", ";
        echo "Total Harga: Rp" . $item['harga'] * $item['jumlah'] . "<br>";
    }
}

$total = hitungTotalHarga($items); // Menghitung total belanja menggunakan fungsi hitungTotalHarga
$diskon = hitungDiskon($total); // Menghitung diskon berdasarkan total belanja menggunakan fungsi hitungDiskon
$totalAkhir = $total - $diskon; // Menghitung total belanja setelah dikurangi diskon


echo "Barang Belanjaan:<br>";
tampilkanDetailPembelian($items); // Menampilkan detail belanja menggunakan fungsi tampilkanDetailPembelian
echo "<br>Total Belanja: Rp" . $total;
echo "<br>Diskon: Rp" . $diskon;
echo "<br>Total Setelah Diskon: Rp" . $totalAkhir;

$namaPembeli = "Keisha";
echo "<br><br>Terima kasih telah berbelanja, {$namaPembeli}!"; // Menampilkan pesan terima kasih kepada pembeli