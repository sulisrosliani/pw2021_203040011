<?php 
require 'functions.php';

$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
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
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h3>Form Ubah Data</h3>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $buku['id']; ?>">
        <ul style="list-style: none;">
            <li>
                <label for="judul" style="margin-right: 8px;">judul</label>
                : <input type="text" name="judul" id="judul" require value="<?= $buku['judul']; ?>"><br><br>
            </li>
            <li>
                <label for="penulis" style="margin-right: 16px;">penulis</label>
                : <input type="text" name="penulis" id="penulis" require value="<?= $buku['penulis']; ?>"><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 21px;">harga</label>
                : <input type="text" name="harga" id="harga" require value="<?= $buku['harga']; ?>"><br><br>
            </li>
            <li>
                <label for="daftar brand" style="margin-right: 9px;">daftar brand</label>
                : <input type="text" name="daftar brand" id="daftar brand" require value="<?= $buku['daftar brand']; ?>"><br><br>
            </li>
            <li>
                <label for="img" style="margin-right: 7px;">gambar</label>
                : <input type="text" name="img" id="img" require value="<?= $buku['gambar']; ?>"><br><br>
            </li>
            <button type="submit" name="ubah"
                style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Ubah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>