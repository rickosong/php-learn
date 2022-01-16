<?php

// koneksi ke database (hostname, username, password, database name)
$conn_db = mysqli_connect("localhost", "root", "", "mahasiswa_db");

// ambil data dari tabel mahasiswa / query data mahasiswa (mysqli_connect, select from * bla bla bla)
$result = mysqli_query($conn_db, "SELECT * FROM mahasiswa");
// var_dump($result);

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numeric
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() // mengembalikan object

while ( $mhs = mysqli_fetch_assoc($result) ) {
    var_dump($mhs);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <tr>
            <td>1</td>
            <td>
                <a href="">ubah | </a>
                <a href="">hapus</a>
            </td>
            <td><img src="img/foto.jpg" alt=""></td>
            <td>123456789</td>
            <td>Mohammad Ricko Aprilianto</td>
            <td>ricko.aprilianto00@gmail.com</td>
            <td>Teknik Informatika</td>
        </tr>
    </table>
</body>
</html>