<?php
// cek apakah tidak ada data di $_get
if ( !isset($_GET["nama"]) || 
    !isset($_GET["NIK"]) || 
    !isset($_GET["email"]) || 
    !isset($_GET["jurusan"]) ||
    !isset($_GET["foto"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        .foto {
            height: 150px;
            width: 150px;
        }
    </style>
</head>
<body>
    <ul>
        <li><img class="foto" src="img/ <?= $_GET["foto"] ?>" alt=""></li>
        <li>nama : <?= $_GET["nama"]; ?> </li>
        <li>NIK : <?= $_GET["NIK"] ?></li>
        <li>Email : <?= $_GET["email"] ?></li>
        <li>Jurusan : <?= $_GET["jurusan"] ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke halaman 1</a>
</body>
</html>