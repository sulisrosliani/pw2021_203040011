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
    $Nama makanan = htmlspecialchars($data['Nama makanan']);
    $Asal daerah = htmlspecialchars($data['Asal daerah']);
    $Kategori = htmlspecialchars($data['Kategori']);
    $Kisaran harga = htmlspecialchars($data['Kisaran harga']);
    $gambar = htmlspecialchars($data['img']);

    $query = "INSERT INTO novel
                VALUES
                ('', '$Nama makanan', '$Asal daerah', '$Kategori', '$Kisaran harga', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM Makanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $Namamakanan = htmlspecialchars($data['Nama makanan']);
    $Asaldaerah = htmlspecialchars($data['Asal derah']);
    $Kategori = htmlspecialchars($data['Kategori']);
    $Kisaranharga = htmlspecialchars($data['Kisaran harga']);
    $gambar = htmlspecialchars($data['img']);
    $query = "UPDATE `makanan` SET `Nama makanan`='$nama makanan',`Asal daerah`
    ='$Asal daerah',`Kategori`='$Kategori',`Kisaran harga`='$Kisaran harga',`img`='$gambar' WHERE id = $id
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>