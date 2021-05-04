<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';
    $id = $_GET ['id'];
    $buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body bgcolor="grey">
    <div class="container">
        <div class="gambar">
            <img src="img/<?= $buku["gambar"]; ?>" ; alt="">
        </div>
    <div class="keterangan">
        <p><?= $buku["judul"]; ?></p>
        <p><?= $buku["penulis"]; ?></p>
        <p><?= $buku["harga"]; ?></p>
        <p><?= $buku["daftar brand"]; ?></p>
    </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>