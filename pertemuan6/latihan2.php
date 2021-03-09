<?php
// $mahasiswa = [
//     ["Sulis Rosliani", "203040011", "sulisrosliani2@gmail.com", "Teknik informatika"],
//     ["Lesti", "203030034", "lesti4@gmail.com", "Teknik Mesin" ],
//     ["203040021", "rika", "rika8@gmail.com ", "Teknik Informatika"]
// ];

// Array assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
    ],
    [
        "Nrp"  => "203040021",
        "Nama" => "Rika",
        "Email" => "rika8@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "Gambar" => "kaka.JPG"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ):?>
    <ul>
    <li>
    <img src="img/<?= $mhs["Gambar"];?>"></li>
        <li>Nama : <?= $mhs ["Nama"];?></li>
        <li>Nrp : <?= $mhs ["Nrp"];?></li>
        <li>Jurusan : <?= $mhs ["Email"];?></li>
        <li>Email : <?= $mhs  ["Jurusan"];?></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>