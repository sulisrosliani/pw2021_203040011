<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                        alert('Data Berhasil ditambahkan!');
                        document.location.href = 'admin.php';
                    </script>";
    } else {
        echo "<script>
            alert('Data Gagal ditambahkan!');
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
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">


</head>

<body>
    <div class="container">
        <div class="add" style="padding-top: 20px;">
            <a href="admin.php"><button class="button alert outline">Batal? </button></a>
        </div>
        <h3>Form Add Product</h3>
        <form action="" method="post">
            <label for="judul">Masukan judul buku</label>
            <input type="text" placeholder="Putri salju" data-role="input" name="judul" id="judul" require>
            <label for="penulis">Masukan penulis buku</label>
            <input type="text" placeholder="jacob ludwig" data-role="input" name="penulis" id="penulis" require>
            <label for="penerbit">Masukan harga buku</label>
            <input type="text" placeholder="Rp. 60.000" data-role="input" name="harga" id="harga" require>
            <label for="harga">Masukan daftar brand</label>
            <input type="text" placeholder="SKU" data-role="input" name="daftarbrand" id="daftarbrand" class="mb-1" title="">
            <label for="img">Masukan nama gambar</label>
            <input type="text" placeholder="putri.jpg" data-role="input" name="gambar" id="gambar" require><br>
            <button type="submit" name="tambah" class="button success outline">
                klik ini
            </button>
        </form>
    </div>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

</body>

</html>