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
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query insert data
        $query = "INSERT INTO mahasiswa
        values('','$nrp', '$nama', '$email', '$jurusan', '$gambar')
        "; 

        mysqli_query($conn_db, $query);

    return mysqli_affected_rows($conn_db);
}


// logika hapus data adalah ambil dulu id baru dimasukkan ke $id, setelah itu masukkan $id ke dalam parameter fungsi hapus, di fungsi hapus kita delete id yg terpilih menggunakan sql, lalu tampilkan affecterd rowsnya.
function hapus($data){
    global $conn_db;

    mysqli_query($conn_db, "DELETE FROM mahasiswa WHERE id = $data ");

    return mysqli_affected_rows($conn_db);
}

function ubah($data) {
    global $conn_db;

        // ambil data dari elemen dalam form
        $id = $data["id"];
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query insert data
        $query = "UPDATE mahasiswa SET
                        nrp = '$nrp',
                        nama = '$nama',
                        email= '$email',
                        jurusan = '$jurusan',
                        gambar = '$gambar'
                WHERE id = $id
        "; //untuk bahasa manusia nya "update tabel mahasiswa set di field nrp, nama, emai, jurusan, dan gambar yg mana sesuai dengan id yang didapat"

        // catatan dari komentar dibawah. jadi function ubah bisa ditambahkan parameternya "function($data, $id) lalu ditambahkan $id yg diadapat dari $_GET["id"]"
        // Just info: Daripada buat li baru untuk id. Mending di function ubah tambah parameter $id. So ubah($_post, $id). $id diambil dari variable $id = $_get["id"].

        mysqli_query($conn_db, $query);

    return mysqli_affected_rows($conn_db);


}



?>