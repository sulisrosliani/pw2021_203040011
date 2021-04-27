<?php
/*
Sulis Rosliani
203040011
https://github.com/sulisrosliani/pw2021_203040011
Pertemuan 10 - 26 April 2021
Mempelajari mengenai koneksi DB
*/
?>

<?php 
// koneksi ke DB & pilih Database 
$conn = mysqli_connect('localhost', 'root'. '', 'pw2021_203040011');

// Query isi tabel mahasiswa 
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
// $row  = mysqli_fetch_row($result); // array numerik
// $row  = mysqli_fetch_assoc($result); // array associative
// $row  = mysqli_fetch_array($result); // keduanya
$row = [];
while ($row = mysqli_fetch_assoc($result)) {
    $row[] = $row;
}

// tampung ke variabel mahasiswa
$mahasiswa = $rows;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h3>Daftar Mahasiswa</h3>

<table border="1" cellpadding="18" cellspacing="0">
<tr>
<th>#</th>
<th>Gambar</th>
<th>NRP</th>
<th>Nama</th>
<th>Email</th>
<th>Jurusan</th>
<th>Aksi</th>
</tr>
<?php foreach ($mahasiswa as $m) : ?>
<tr>
<td>1</td>
<td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
<td><?= $m['nrp']; ?></td>
<td><?= $m['nama']; ?></td>
<td><?= $m['email']; ?></td>
<td><?= $m['jurusan']; ?></td>
<td>
<a href="">ubah</a> | <a href="">hapus</a>
</td>
</tr>
<?php endforeach; ?>
    
</table>
    
</body>
</html>