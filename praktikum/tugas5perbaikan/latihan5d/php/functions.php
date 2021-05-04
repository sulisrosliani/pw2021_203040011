<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040011");

    return $conn;
}
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data) {
    $conn = koneksi();
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $harga = htmlspecialchars($data['harga']);
    $daftarbrand = htmlspecialchars($data['daftarbrand']);
    $img = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO buku
                VALUES
                ('', '$judul', '$penulis', '$harga', '$daftarbrand', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $harga = htmlspecialchars($data['harga']);
    $daftarbrand = htmlspecialchars($data['daftarbrand']);
    $img = htmlspecialchars($data['gambar']);
    $query = "UPDATE `buku` SET `judul`='$judul',`penulis`='$penulis',`harga`='$harga',`daftarbrand`='$daftarbrand',`img`='$gambar' WHERE id = $id
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>