<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body style="font-family: Arial, sans-serif;">
    <h3>Form Tambah Data</h3>
    <form action="" method="post">
        <ul style="list-style: none;">
            <li>
                <label for="judul" style="margin-right: 8px;">Masukan judul buku</label>
                : <input type="text" placeholder="Putri salju" name="judul" id="judul" require><br><br>
            </li>
            <li>
                <label for="penulis" style="margin-right: 16px;">Masukan penulis buku</label>
                : <input type="text" placeholder="jacob ludwig" name="penulis" id="penulis" require><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 21px;">Masukan harga buku</label>
                : <input type="text" placeholder="Rp. 60.000" name="harga" id="harga" require><br><br>
            </li>
            <li>
                <label for="daftar brand" style="margin-right: 9px;">Masukan daftar brand</label>
                : <input type="text" placeholder="SKU" name="daftar brand" id="daftar brand" require><br><br>
            </li>
            <li>
                <label for="img" style="margin-right: 7px;">Masukan nama gambar</label>
                : <input type="text" placeholder="putri.jpg" name="img" id="img" require><br><br>
            </li>
            <button type="submit" name="tambah"
                style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Tambah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>