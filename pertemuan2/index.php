<?php
/*
Sulis Rosliani
203040011
https://github.com/sulisrosliani/pw2021_203040011
Pertemuan 2 - 17 Februari 2021
Mempelajari mengenai sintaks PHP
*/
?>

<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// var_dump

echo "Sulis Rosliani";

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh di awali dengan angka, tapi boleh mengandung angka
// $nama = "Sulis Rosliani";
// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung string / concatenation / concat
// .
// $nama_depan = "Sulis";
// $nama_belakang = "Rosliani";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /= %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Sulis";
// $nama .= " ";
// $nama .= "Rosliani";
// echo $nama;

// Perbandingan
// <, >, <=, ==, !=
// var_dump(1 === "1")

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>

