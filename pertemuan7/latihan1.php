<?php 
// variable scope / lingkup variabel
// variable superglobals
// variable yg dimiliki oleh PHP
// diperlalkukan seperti array associative
// get

$mahasiswa = [
    [
        "nama" => "Mohammad Ricko Aprilianto",
        "NIK" => "8579",
        "email" => "ricko.aprilianto00@gmail.com",
        "jurusan" => "RPL" ,
        "foto" => "cogans2020.jpg"
    ],

    [
        "nama" => "Reja",
        "NIK" => "8578",
        "email" => "reja@gmail.com",
        "jurusan" => "RPL" ,
        "foto" => "foto2.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li>nama :
                <a href="latihan2.php?nama=<?=$mhs["nama"]; ?>&NIK=<?=$mhs["NIK"]; ?>&email=<?=$mhs['email'] ?>&jurusan=<?= $mhs["jurusan"] ?>&foto=<?= $mhs["foto"]; ?>" ><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>