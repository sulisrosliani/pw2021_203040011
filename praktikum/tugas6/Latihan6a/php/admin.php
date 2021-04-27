<?php 
require 'functions.php';
$Makanan = query("SELECT * FROM novel");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>

    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama makanan</th>
                <th>Asal daerah</th>
                <th>Kategori</th>
                <th>Kisaran harga</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($Makanan as $mkn) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button
                            style="border: none; padding: 5px 13px; background-color: teal; color: white; margin-bottom: 5px; border-radius: 2px;">Ubah</button></a>
                    <a href=""><button
                            style="border: none; padding: 5px 10px; background-color: red; color: white; border-radius: 2px;">Hapus</button></a>
                </td>
                <td><img width="40px" src="../assets/img/<?= $nvl['img']; ?>" alt=""></td>
                <td><?= $mkn['Nama makanan']; ?></td>
                <td><?= $mkn['Asal daerah']; ?></td>
                <td><?= $mkn['Kategori']; ?></td>
                <td><?= $mkn['Kisaran harga']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>