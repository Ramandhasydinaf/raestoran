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
    <h2>Penjualan</h2>
    <form action="proses.php"
    method="post">
    <table>
    <tr>
    <td>Nama Barang</td>
    <td>:</td>
    <td><input type="text"
    name="nama_barang" value=""> </td>
</tr>
<tr>
<td>Harga Barang </td>
<td>:</td>
<td> <input type="number"
name="jumlah" value=""> </td>
</tr>
<tr>
<td></td>
<td></td>
<input type="submit" name=""
value="proses">
<input type="reset" name=""
value="Reset">
<br>
*diskon, jika total +200000
</td>
</tr>
</table>
</form>

</body>
</html>