<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040011");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $row[] = $row;
    }
    return $rows;
}