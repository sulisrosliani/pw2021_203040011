<?php
require 'php/functions.php';
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
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
                <th>judul</th>
                <th>penulis</th>
                <th>harga</th>
                <th>daftar brand</th>
                <th>gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;?>
            <?php foreach ($buku as $buku): ?>
            <tr>
            
                <td><?=$i;?></td>
                
                <td>
                    <a href="php/detail.php?id=<?=$buku['id'];?>">
                        <?=$buku["judul"];?>
                    </a>
                </td>
                <td><?=$buku['penulis'];?></td>
                <td><?=$buku['harga'];?></td>
                <td><?=$buku['daftar brand'];?></td>
                <td><img width="40px" src="img/<?=$buku['gambar'];?>" alt=""></td>
                
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>