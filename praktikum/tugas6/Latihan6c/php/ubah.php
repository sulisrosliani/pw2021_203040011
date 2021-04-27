<?php 
require 'functions.php';

$id = $_GET['id'];
$Makanan = query("SELECT * FROM makanan WHERE id = $id")[0];

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
    <title>Makanan</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h3>Form Ubah Data</h3>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $Makanan['id']; ?>">
        <ul style="list-style: none;">
            <li>
                <label for="Nama makanan" style="margin-right: 8px;">Nama makana</label>
                : <input type="text" name="judul" id="judul" require value="<?= $Novel['judul']; ?>"><br><br>
            </li>
            <li>
                <label for="Asal daerah" style="margin-right: 16px;">Asal daerah</label>
                : <input type="text" name="penulis" id="penulis" require value="<?= $Novel['penulis']; ?>"><br><br>
            </li>
            <li>
                <label for="Kategori" style="margin-right: 21px;">Kategori</label>
                : <input type="text" name="penerbit" id="penerbit" require value="<?= $Novel['penerbit']; ?>"><br><br>
            </li>
            <li>
                <label for="kisaran harga" style="margin-right: 9px;">Kisaran Harga</label>
                : <input type="text" name="harga" id="harga" require value="<?= $Novel['harga']; ?>"><br><br>
            </li>
            <li>
                <label for="img" style="margin-right: 7px;">Gambar</label>
                : <input type="text" name="img" id="img" require value="<?= $makanan['img']; ?>"><br><br>
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