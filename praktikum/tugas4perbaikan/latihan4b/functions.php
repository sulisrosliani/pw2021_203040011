<?php
//fungsi untuk melakkan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040011");

    return $conn;
}
 // function untuk melakukan query dan memasukannya kedalam array 
 function query($sql)
 {
     $conn = koneksi ();
     $result = mysqli_query($conn, "$sql");
     $rows = [];
     while ($row = mysqli_fetch_assoc($result)) {

     }
     return $rows;
    }
?>

