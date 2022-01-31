<?php
// cek apakah user sudah login atau belum
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
//  di dalam file ini ada dua functions yaitu query dan ubah


require "functions.php";

// ambil data di URL
$id = $_GET["id"];

//  query data mahasiswa berdasarkan id
$mhs= query("SELECT * FROM mahasiswa WHERE id = $id") [0];  //ditambahkan [0] agar tidak susah  lagi saat menulis [0] di value form
// var_dump($mhs0]["nama"]) var dump ini sebagai catatan bagaimana cara mengisi value pada form
// var_dump($mhs);

// cek apakah tombol submit sdh ditekan atau belum
if(isset($_POST["submit"])) {

    // cek apakah berhasil ditubah atau tidak
    if( ubah($_POST) > 0 ){
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php'
        </script>
        ";
    }
    else{
        echo "<p style='color:red'> data gagal diubah</p>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data Mahasiswa</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">
        <label for="nrp">NRP :</label>
        <input type="text" name="nrp" id="nrp" placeholder="masukkan nrp anda" required value="<?= $mhs["nrp"] ?>">
        <br><br>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" placeholder="masukkan nama anda" required value="<?= $mhs ["nama"] ?>">
        <br><br>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" placeholder="masukkan email anda" required value="<?= $mhs["email"] ?>">
        <br><br>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" placeholder="masukkan jurusan anda" required value="<?= $mhs["jurusan"] ?>">
        <br><br>
        <label for="gambar">Gambar : </label><br>
        <img src="img/<?= $mhs["gambar"] ?>" alt="" width="50px"><br>
        <input type="file" name="gambar" id="gambar" placeholder="masukkan nama gambar anda">
        <br><br>
        <button type="submit" name="submit">Ubah Data</button>
    </form>
    <br><br>
    <a href="index.php">ke halaman tabel data</a>
</body>
</html>