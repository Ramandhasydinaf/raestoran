<?php

$nama =  $_POST['nama_barang'];
$harga = $_POST['harga_barang'];
$jumlah = $_POST['jumlah'];

$hitung = $harga * $jumlah;

if ($hitung >= 200000){
    $diskon = 0.05 * hitung;
}else{
    $diskon = 0;
}
$bayar = $hitung - $diskon;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style media="screen">
.link{
    font-family: sans-serif;
    color:blue;
}
</style>
</head>
<body>
    <h2>Hasil Proses Penjualan</h2>
    Nama barang : <?php echo $nama ?><br>
    Harga Barang : <?php echo $harga ?><br>
    Jumlah Beli : <?php echo $jumlah ?><br>
    Total : <?php echo $hitung ?><br>
    Diskon : <?php echo $diskon ?><br>
    Bayar : <?php echo $bayar ?><br>
    <a herf="index.php"><< kembali</a>
</body>
</html>