<?php 
$mahasiswa = [
    ["Mohammad Ricko Aprilianto", "081998616849", "Rekayasa Perangkat Lunak", "ricko.aprilianto00@gmail.com"],
    ["Reja", "657", " RPL", "awokd @mail.com"]

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Mahasiswa</h1>

    <?php foreach($mahasiswa as $m) : ?>
    <ol>
        <li>Nama :<?= "$m[0]"?></li>
        <li>No Telp :<?= "$m[1]"?></li>
        <li>Jurusan :<?= "$m[2]"?></li>
        <li>Email :<?= "$m[3]"?></li>
    </ol>
    <?php endforeach; ?>
</body>
</html>