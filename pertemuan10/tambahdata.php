<?php

require "functions.php";

// cek apakah tombol submit sdh ditekan atau belum
if(isset($_POST["submit"])) {

    // cek apakah berhasil atau tidak
    if( tambah($_POST) > 0 ){
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php'
        </script>
        ";
    }
    else{
        echo "<p style='color:red'> data gagal terupload</p>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Mahasiswa</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nrp">NRP :</label>
        <input type="text" name="nrp" id="nrp" placeholder="masukkan nrp anda">
        <br><br>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" placeholder="masukkan nama anda">
        <br><br>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" placeholder="masukkan email anda">
        <br><br>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" placeholder="masukkan jurusan anda">
        <br><br>
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" placeholder="masukkan nama gambar anda">
        <br><br>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
    <br><br>
    <a href="index.php">ke halaman tabel data</a>
</body>
</html>