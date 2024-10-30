<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabel Harga Barang</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Data produk berdasarkan tabel yang diunggah
$produk = [
    ["ID" => 1, "Nama" => "Buavital", "Stok" => 30, "Harga" => 10890],
    ["ID" => 2, "Nama" => "Bango", "Stok" => 21, "Harga" => 21890],
    ["ID" => 3, "Nama" => "Sariwangi", "Stok" => 10, "Harga" => 9990],
    ["ID" => 4, "Nama" => "Shampo Baby", "Stok" => 20, "Harga" => 21980],
    ["ID" => 5, "Nama" => "Bedak", "Stok" => 15, "Harga" => 14990],
    ["ID" => 6, "Nama" => "Baju Bayi", "Stok" => 20, "Harga" => 35500],
    ["ID" => 7, "Nama" => "Jumper", "Stok" => 25, "Harga" => 49999]
];

// Menghitung jumlah total per produk dan jumlah keseluruhan
$total_semua = 0;
foreach ($produk as &$item) {
    $item["Jumlah"] = $item["Stok"] * $item["Harga"]; // Menghitung total harga per produk
    $total_semua += $item["Jumlah"]; // Menambahkan ke total keseluruhan
}
unset($item); // Menghapus referensi untuk keamanan
?>

<h3>Tabel Harga Barang</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>
    <?php foreach ($produk as $item) { ?>
        <tr>
            <td><?= $item["ID"]; ?></td>
            <td><?= $item["Nama"]; ?></td>
            <td><?= $item["Stok"]; ?></td>
            <td><?= number_format($item["Harga"]); ?></td>
            <td><?= number_format($item["Jumlah"]); ?></td>
        </tr>
    <?php } ?>
    <tr>
        <th colspan="4" style="text-align:right">Jumlah Total</th>
        <th><?= number_format($total_semua); ?></th>
    </tr>
</table>

</body>
</html>