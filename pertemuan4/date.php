<?php
    // date
    // untuk menampilkan tanggal dengan forma tertentu
    // echo date('l, d/m/Y');


    // time
    // UNIX time / EPOCH time
    // waktu yg sdh berlalu sejak 1 januari 1970
    // echo time();

    // echo date('l', time()+60*60*24);
    // echo '<br>';
    // echo date('d/m/Y', time()-60*60*24);


    // mktime
    // membuat sendiri detik
    // (0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo mktime(0,0,0,7,15,2021).'<br>';
    // echo date('l, d/m/Y', mktime(0,0,0,4,4,2004));


    // strtotime
    echo date('l',strtotime('4 april 2003')); 

?>