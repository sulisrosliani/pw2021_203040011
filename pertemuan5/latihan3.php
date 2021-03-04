<?php
$mahasiswa = [["Sulis Rosliani", "203040011", "Teknik Informatika", "sulisrosliani2gmail.com"],
["Annisa", "203040022", "Teknik Industri", "Annisa1@gmail.com"],
["Mimin", "203040033", "Teknik Informatika", "Mimin@gmail.com"]];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>




</body>
</html>
