<?php
// cek apakah user sudah login atau belum
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$mahasiswa = query( "SELECT * FROM mahasiswa" );

// cek apakah tombol cari sudah di klik
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
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
            width: 80px;
            height: 80px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambahdata.php">Tambah Data Mahasiswa</a>
    <br><br>
    <button onclick="return confirm('apakah anda yakin ingin keluar dari website?')"><a href="logout.php">Logout Website</a></button>
    <br><br>

    <form action="" method="post">
        <label for="search">Cari Data Mahasiswa</label>
        <input type="text" name="keyword" id="search" placeholder="masukkan data mahassiwa" autofocus autocomplete="off">
        <button type="submit"name="cari">Cari</button>
    </form>
    <br><br>

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

        <?php $i=1 ?>
        <?php foreach ( $mahasiswa as $row  ) :  ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"] ?>">ubah | </a>
                <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus data ini')">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"] ?>" alt=""></td>
            <td><?= $row["nrp"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach  ?>
    </table>
</body>
</html>