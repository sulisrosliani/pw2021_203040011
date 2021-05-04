<?php
// Melakukan koneksis ke database
$conn = mysqli_connect("localhost", "root", "");

// Memilih database
mysqli_select_db($conn, "pw_tubes_203040011");

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM buku");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>

<h1>Daftar Buku</h1>

<table border = "1" cellpadding = "10" cellspacing = "0">

    <tr>
        <th>No</th>
        <th>judul</th>
        <th>penulis</th>
        <th>harga</th>
        <th>daftar brand</th>
        <th>gambar</th>
    </tr>

    <?php $i = 1; ?>

    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>

    <tr>

    <td><?= $i ?></td>
    <td><?= $row["judul"]; ?></td>
    <td><?= $row["penulis"]; ?></td>
    <td><?= $row["harga"]; ?></td>
    <td><?= $row["daftar brand"]; ?></td>
    <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
    </tr>
    <?php $i++; ?>

    <?php endwhile; ?>

    
</table>
    
</body>
</html>