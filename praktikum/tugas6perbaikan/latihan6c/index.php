<?php
require 'php/functions.php';
$buku = query("SELECT * FROM buku")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/oke.css">
    <title>Buku</title>
</head>

<body>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
        <h1 class="centered white-text">Buku</h1>

        <a href="php/login.php" class="waves-effect waves-light blue btn-small">Login Halaman Admin</a>

        <table class="centered highlight - white-text grey darken-3">
            <tr class="z-depth-5 blue lighten-3 white-text">
                <th>No</th>
                <th style="text-align: center;">judul</th>
                <th style="text-align: center;">penulis</th>
                <th style="text-align: center;">hargat</th>
                <th style="text-align: center;">daftar brand</th>
                <th style="text-align: center;">gambar</th>
                <th style="text-align: center;">detail</th>
            </tr>
            <?php $i = 1?>
            <?php foreach ($buku as $buku): ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$buku["judul"];?></td>
                <td><?=$buku["penulis"];?></td>
                <td><?=$buku["harga"];?></td>
                <td><?=$buku["daftar brand"];?></td>
                <td><img width="150px" src="img/<?=$buku["gambar"];?>" alt=""></td>
                <td>
                    <p class="Nama">
                        <a href="php/detaill.php?id=<?=$buku['id'];?>">Lihat Produk</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach;?>
    </div>
</body>

</html>