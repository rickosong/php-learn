<?php

// koneksi database
$conn_db = mysqli_connect("localhost", "root", "", "mahasiswa_db");

// cek apakah tombol submit sdh ditekan atau belum
if(isset($_POST["submit"])) {
    // ambil data dari elemen dalam form
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    // query insert data
    $query = "INSERT INTO mahasiswa
                    values('','$nrp', '$nama', '$email', '$jurusan', '$gambar')
                    "; 
    
    mysqli_query($conn_db, $query);

    // cek apakah berhasil atau tidak
    if(mysqli_affected_rows($conn_db) > 0) {
        echo "<p style='color:green'> data $nama sudah terupload</p>";
    }
    else{
        echo "<p style='color:red'> data $nama gagal terupload</p>";
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