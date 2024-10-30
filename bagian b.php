<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembelanjaan</title>
    <style>
        /* Gaya CSS untuk membuat tampilan seperti struk */
        body {
            font-family: monospace; /* Font dengan spasi karakter yang sama */
        }
        .struk {
            text-align: left;
            padding: 10px;
        }
        .struk p {
            margin: 0;
        }
        .struk .total {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="struk">
    <p>Struk belanja</p>
    <p>Tanggal Transaksi: 30 Oktober 2024</p>

    <?php
    // Data produk dan harga (sesuaikan dengan data Anda)
    $produk = array(
        "Bedak" => array("jumlah" => 15, "harga" => 10000),
        "Baju Bayi" => array("jumlah" => 10, "harga" => 25000),
        "Buavita" => array("jumlah" => 5, "harga" => 8000),
        "Shampo" => array("jumlah" => 10, "harga" => 12000)
    );

    // Fungsi untuk menghitung diskon
    function hitungDiskon($totalBelanja) {
        if ($totalBelanja >= 400000) {
            return 0.35; // Diskon 35%
        } elseif ($totalBelanja >= 250000) {
            return 0.2;  // Diskon 20%
        } else {
            return 0;   // Tidak ada diskon
        }
    }

    // Hitung total belanja
    $totalBelanja = 0;
    foreach ($produk as $namaProduk => $detailProduk) {
        $subtotal = $detailProduk["jumlah"] * $detailProduk["harga"];
        $totalBelanja += $subtotal;
        echo "<p>$namaProduk ($detailProduk[jumlah] x Rp$detailProduk[harga])\tRp$subtotal</p>";
    }

    // Hitung diskon
    $diskon = hitungDiskon($totalBelanja) * $totalBelanja;

    // Hitung total pembayaran
    $totalPembayaran = $totalBelanja - $diskon;

    // Tampilkan hasil
    echo "<p>---------------------------------------</p>";
    echo "<p class='total'>Total Belanja\t\tRp$totalBelanja</p>";
    echo "<p class='total'>Diskon\t\t\tRp$diskon</p>";
    echo "<p class='total'>Total Pembayaran\tRp$totalPembayaran</p>";
    ?>
</div>
</div>

</body>
</html>