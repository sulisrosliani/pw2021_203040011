<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$buku = query("SELECT * FROM buku");
if (isset($_GET["cari"])) {
    $buku = cari($_GET["keyword"]);
}
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $buku = query(
        "SELECT * FROM buku WHERE
        judul LIKE '%$keyword%' OR
        penulis LIKE '%$keyword%' OR
        harga LIKE '%$keyword%' OR
        daftar brand LIKE '%$keyword%'
        "
    );
} else {
    $buku = query("SELECT * FROM buku");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../css/oke.css">
    <title>Buku</title>
</head>

<body>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <div class="container">
        <h1 class="centered white-text">Buku</h1>
        <div class="add">
            <a href="tambah.php" class="waves-effect waves-light purple lighten-3 btn-small">Tambah Data</a>
            <form action="" method="GET">
                <input class="white-text" type="text" name="keyword" autofocus placeholder="masukkan keyword.."
                    autocomplete="off">
                <button class="waves-effect waves-light pink btn-small" type="submit" name="cari">Search</button>
            </form>
        </div>
        <table class="centered highlight - white-text brown lighten-2">
            <tr class="z-depth-5 pink lighten-4 white-text">
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">judul</th>
                <th style="text-align: center;">penulis</th>
                <th style="text-align: center;">harga</th>
                <th style="text-align: center;">daftar brand</th>
                <th style="text-align: center;">gambar</th>
                <th style="text-align: center;">Detail</th>
                <th style="text-align: center;">Opsi</th>
            </tr>
            <?php if (empty($buku)): ?>
            <tr>
                <td colspan="7">
                    <h1>buku tidak ditemukan</h1>
                </td>
            </tr>
            <?php else: ?>
            <?php $i = 1?>
            <?php foreach ($buku as $buku): ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$buku["judul"];?></td>
                <td><?=$buku["penulis"];?></td>
                <td><?=$buku["harga"];?></td>
                <td><?=$buku["daftar brand"];?></td>
                <td><img width="100px" src="img/<?=$buku["gambar"];?>" alt=""></td>
                <td>
                    <p class="Nama">
                        <a href="../php/detaill.php?id=<?=$buku['id'];?>">Lihat Produk</a>
                </td>
                <td>
                    <a href="ubah.php?id=<?=$buku['id']?>" class="waves-effect waves-light pink btn-small">Ubah</a>
                    <a href="hapus.php?id=<?=$buku['id']?>"
                        class="waves-effect waves-light purple lighten-3 btn-small">Hapus</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach;?>
            <?php endif;?>
            <div class="logout">
                <a href="logout.php" class="waves-effect waves-light blue btn-small">Logout</a>
            </div>
    </div>
</body>

</html>