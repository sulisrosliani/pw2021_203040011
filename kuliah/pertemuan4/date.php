<?php
/*
Sulis Rosliani
203040011
https://github.com/sulisrosliani/pw2021_203040011
Pertemuan 4 - 28 Februari 2021
Mempelajari mengenai Function
*/
?>

<?php
// pertemuan 4 - Function
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,2,4,2002));

// strtotime
echo date("l", strtotime("04 feb 2002"));

















?>