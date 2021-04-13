<?php
$Makanan = [
    [
        "Nama makanan" => "mie",
        "Asal daerah" => "Aceh",
        "Kategori" => "Makanan utama",
        "Kisaran harga" => "Rp. 15.000 - 25.000",
        "gambar" => "mie.jpg" 
    ],
    [
        "Nama makanan" => "Gulai-Belacan",
        "Asal daerah" => "Provinsi Riau",
        "Kategori" => "Makanan utama",
        "Kisaran harga" => "Rp. 12.000 - 17.000",
        "gambar" => "Gulai-Belacan.jpg" 
    ],
    [
        "Nama makanan" => "bika",
        "Asal daerah" => "Provinsi Sumatra Utara",
        "Kategori" => "Makanan utama",
        "Kisaran harga" => "Rp. 67.000 - 70.000",
        "gambar" => "bika.jpg" 
    ],
    [
        "Nama makanan" => "moci",
        "Asal daerah" => "Sukabumi",
        "Kategori" => "Makanan Penutup",
        "Kisaran harga" => "Rp. 15.000 - 56.000",
        "gambar" => "moci.jpg" 
    
    ],
    [
        "Nama makanan" => "onde-onde",
        "Asal daerah" => "Tiongkok",
        "Kategori" => "Makanan Penutup",
        "Kisaran harga" => "Rp. 10.000 - 20.000",
        "gambar" => "onde.jpg" 
    ],
    [
        "Nama makanan" => "otak-otak",
        "Asal daerah" => "Asia Tenggara",
        "Kategori" => "Makanan utama",
        "Kisaran harga" => "Rp. 15.000 - 25.000",
        "gambar" => "Otak-otak.jpg" 
    ],
    [
        "Nama makanan" => "pempek",
        "Asal daerah" => "Palembang",
        "Kategori" => "Makanan utama",
        "Kisaran harga" => "Rp. 10.000 - 20.000",
        "gambar" => "pempek.jpg" 
    ],
    [
        "Nama makanan" => "rendang",
        "Asal daerah" => "Padang",
        "Kategori" => "Makanan utama",
        "Kisaran harga" => "Rp. 85.000 - 125.000",
        "gambar" => "rendang.jpg" 
    ],
    [
        "Nama makanan" => "sate",
        "Asal daerah" => "Jawa",
        "Kategori" => "Makanan utama",
        "Kisaran harga" => "Rp. 22.000 - 10.000",
        "gambar" => "sate.jpg" 
    ],
    [
        "Nama makanan" => "soto",
        "Asal daerah" => "Nusantara",
        "Kategori" => "Makanan utama",
        "Kisaran harga" => "Rp. 15.000 - 25.000",
        "gambar" => "soto.jpg" 
    ],
];
?>
<!DOCTYPE html>
<html lang>

<head>
    <title>Makanan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mb-3 mt-3">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama makanan</th>
                    <th scope="col">Asal daerah</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Kisaran harga</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($Makanan as $mkn) : ?>
                <tr>
                    <td><b><?= $i ?> </b></td>
                    <td><img src="img/<?= $mkn["gambar"]; ?>"></td>
                    <td><b><?= $mkn["Nama makanan"]; ?></b></td>
                    <td><b><?= $mkn["Asal daerah"]; ?></b></td>
                    <td><b><?= $mkn["Kategori"]; ?></b></td>
                    <td><b><?= $mkn["Kisaran harga"]; ?></b></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
        <tbody>
    </div>
</body>