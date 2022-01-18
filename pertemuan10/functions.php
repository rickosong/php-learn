<?php 

// koneksi ke database (hostname, username, password, database name)
$conn_db = mysqli_connect("localhost", "root", "", "mahasiswa_db");

// catatan functions
// function query = nama function
// ($query) merupakan sebuah permasalahan yg dipakakan ke fungsi query. contoh dalam kasus ini adalah "(SELECT * fORM mahasiswa) 
function query($query) {
    global $conn_db;
    $result = mysqli_query($conn_db, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data){
    global $conn_db;

        // ambil data dari elemen dalam form
        $nrp = $data["nrp"];
        $nama = $data["nama"];
        $email = $data["email"];
        $jurusan = $data["jurusan"];
        $gambar = $data["gambar"];

        // query insert data
        $query = "INSERT INTO mahasiswa
        values('','$nrp', '$nama', '$email', '$jurusan', '$gambar')
        "; 

        mysqli_query($conn_db, $query);

    return mysqli_affected_rows($conn_db);
}

?>