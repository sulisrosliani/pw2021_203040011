<?php 
if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$Makanan = query("SELECT * FROM makanan WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img width="120px" src="../assets/img/<?= $Novel["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $Makanan["Nama makanan"]; ?></p>
            <p><?= $Makanan["Asal daerah"]; ?></p>
            <p><?= $Makanan["Kategori"]; ?></p>
            <p>Rp. <?= $Novel["Kisaran harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>