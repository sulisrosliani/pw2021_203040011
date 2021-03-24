<?php
/*
Sulis Rosliani
203040011
https://github.com/sulisrosliani/pw2021_203040011
Pertemuan 7 - 17 Maret 2021
Mempelajari mengenai GET & POST
*/
?>

<?php
// $_GET

$mahasiswa = [
    [
        "Nama" => "Sulis Rosliani",
        "Nrp"  => "203040011",
        "Email" => "sulisrosliani2@gmail.com",
        "Jurusan" => "Teknik Informatika",  
        "Gambar" => "sulis.JPG"
    ],
    [
        "Nama" => "Lesti",
        "Nrp"  => "203030034",
        "Email" => "lesti4@gmail.com",
        "Jurusan" => "Teknik Mesin",
        "Gambar" => "lesti.JPG"
    ]
];
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li>
        <a href="latihan2.php?Nama=<?= $mhs["Nama"]; ?>&Nrp=<?= $mhs["Nrp"]; ?>
        &Email=<?= $mhs["Email"]; ?>&Jurusan=<?= $mhs["Jurusan"]; ?>
        &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["Nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>