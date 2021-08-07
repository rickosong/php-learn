<?php
$books = [
    [
        "nama" => "Resep Masakan",
        "penerbit" => "Intan Sari Mulya",
        "penulis" => "Mohammad Ricko Aprilianto",
        "harga" => "RP 25.000",
        "foto" => ""
    ],

    [
        "nama" => "Naruto",
        "penerbit" => "Shonen Jump",
        "penulis" => "Masashi Kishimoto",
        "harga" => "RP 50.000",
        "foto" => ""
    ],

    [
        "nama" => "Shingerki No Kyojin",
        "penerbit" => "Shonen Jump",
        "penulis" => "Hajime",
        "harga" => "RP 50.000",
        "foto" => ""
    ],

    [
        "nama" => "One Piece",
        "penerbit" => "Shonen Jump",
        "penulis" => "Eichiro Oda",
        "harga" => "RP 50.000",
        "foto" => ""
    ],

    [
        "nama" => "Naruto Sippudem",
        "penerbit" => "Shonen Jump",
        "penulis" => "Masashi Kishimoto",
        "harga" => "RP 50.000",
        "foto" => ""
    ],

    [
        "nama" => "Inuyasha",
        "penerbit" => "Shonen Jump",
        "penulis" => "Orang Jepang",
        "harga" => "RP 50.000",
        "foto" => ""
    ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku</title>
    <style>
        table {
            text-align: center;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php foreach($books as $book) : ?>
        <tr>
                <td><?= $book["nama"] ?></td>
                <td><?= $book["penulis"] ?></td>
                <td><?= $book["penerbit"] ?></td>
                <td><?= $book["harga"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>