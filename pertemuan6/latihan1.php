<?php
/*
Sulis Rosliani
203040011
https://github.com/sulisrosliani/pw2021_203040011
Pertemuan 6 - 10 Maret 2021
Mempelajari mengenai Assosiative Array pada PHP
*/
?>

<?php
// array
// membuat array
// $hari = array("Senin", "Selasa", "Rabu");
// $bulan = ["Januari", "Februari", "Maret"];
// $arr = [100, "teks", true];
// menampilkan array
// versi debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// menampilkan 1 elemen pada array
// echo $arr[0]; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    
<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>

<?php foreach( $angka as $a) : ?>
    <?php foreach($a as $c) : ?>
    <div class="kotak"><?= $c;?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>

</body>
</html>