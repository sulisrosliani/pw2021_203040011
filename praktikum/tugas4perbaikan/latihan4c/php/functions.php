<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040011");

    return $conn;
}

function query($sql){
    $koneksi = koneksi();
    $result = mysqli_query($koneksi, "$sql");

    $rows=[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;

}

?>