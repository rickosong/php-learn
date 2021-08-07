<?php 
    // array
    // menyimpan banyak variabel
    // elemen pada array boleh memiliki tipe data yg berbeda
    // pasangan antar key dan value
    // key nya adalah index yg pasti dimulai dari 0

    // membuat array
    // cara lama
    $hari = array("Senin", "Selasa", "Rabu");
    // cara baru
    $bulan = ["Januari", "Februari", "Maret"];

    // menampilkan array
    // var_dump, print_r
    // var_dump($hari);
    // echo '<br>';
    // print_r($bulan);
    // echo '<br>';

    // menapilkan 1 elemen pada array
    // echo $hari[2];
    // echo '<br>';
    // echo $bulan[0]

    // menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "Kamis";
    echo '<br>';
    var_dump($hari);
?>