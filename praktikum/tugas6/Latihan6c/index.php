<?php
require 'php/functions.php';
$Makanan = query("SELECT * FROM makanan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="php/admin.php">Ke Halaman Admin</a>
    </div>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama makanan</th>
                <th>Asal daerah</th>
                <th>Kategori</th>
                <th>Kisaran harga</th>
                <th>gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;?>
            <?php foreach ($Makanan as $mkn): ?>
            <tr>
                <td><?=$i;?></td>
                <td><img width="40px" src="./assets/img/<?=$nvl['img'];?>" alt=""></td>
                <td>
                    <a href="php/detail.php?id=<?=$nvl['id'];?>">
                        <?=$nvl["judul"];?>
                    </a>
                </td>
                <td><?=$mkn['Nama makanan'];?></td>
                <td><?=$mkn['Asal daerah'];?></td>
                <td>Rp. <?=$nvl['Kategori'];?></td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>