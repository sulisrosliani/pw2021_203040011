<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["Nama"]) ||
    !isset($_GET["Nrp"]) ||
    !isset($_GET["Email"]) ||
    !isset($_GET["Jurusan"]) ||
    !isset($_GET["Gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["Gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["Nrp"]; ?></li>
        <li><?= $_GET["Email"]; ?></li>
        <li><?= $_GET["Jurusan"]; ?></li>
    </ul>

<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>

