<?php 
// $students = [
//     ["Mohammad Ricko Aprilianto", "081998616849", "Rekayasa Perangkat Lunak", "ricko.aprilianto00@gmail.com"],
//     ["Reja", "657", " RPL", "awokd @mail.com"]

// ];

// array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yg kita buat sendiri

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
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><img src="img/<?= $mhs["foto"] ?> "></li>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>NIK : <?= $mhs["NIK"] ?></li>
            <li>Jurusan : <?= $mhs["jurusan"] ?></li>
            <li>EMail : <?= $mhs["email"] ?></li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>