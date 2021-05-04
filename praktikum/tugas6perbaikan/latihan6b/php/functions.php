<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "", "pw_tubes_203040011");
    mysqli_select_db($conn, "pw_tubes_203040011");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $harga = htmlspecialchars($data['harga']);
    $daftarbrand = htmlspecialchars($data['daftarbrand']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO buku
                            VALUES
                            ('', '$judul', '$penulis', '$harga', '$daftarbrand', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = ($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $harga = htmlspecialchars($data['harga']);
    $daftarbrand = htmlspecialchars($data['daftarbrand']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE buku SET
    judul = '$judul',
    penulis = '$penulis',
    harga = '$harga',
    daftarbrand = '$daftarbrand',
    img = '$Gambar'
    WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM buku
    WHERE
    judul LIKE '%$keyword%' OR
    penulis LIKE '%$keyword%' OR
    harga LIKE '%$keyword%' OR
    daftar brand LIKE '%$keyword%'
    ";
    return query($query);
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('Username sudah di gunakan');
        </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query_tambah = "INSERT INTO user VALUES ('','$username','$password')";
    mysqli_query($conn, $query_tambah);
    return mysqli_affected_rows($conn);
}
?>