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

        // upload gambar    note jika variable seperti $gambar ditambahkan tanda seru seperti $!gambar, itu artinya "gambar == false"
        $gambar = upload();
        if (!$gambar){
            return false;
        }

        // query insert data
        $query = "INSERT INTO mahasiswa
        values('','$nrp', '$nama', '$email', '$jurusan', '$gambar')
        "; 

        mysqli_query($conn_db, $query);

    return mysqli_affected_rows($conn_db);
}


function upload(){
    $namaFile = $_FILES['gambar'] ['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah data ada / diupload
    if($error == 4){
        echo "<script>alert('anda belum mengisi foto')</script>";
        return false;
    }

    // cek apakah data yg diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>alert('file yang anda isi bukanlah sebuah foto, harus foto')</script>";
        return false;
    }

    // cek ukuran file foto agar tidak terlalu besar
    if ($ukuranFile > 1000000){
        echo "<script>alert('ukuran file foto yang anda masukkan terlalu besar')</script>";
        return false;
    }

    // generate nama baru untuk file agar tidak ada file yg terduplikat namanya
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, "img/" . $namaFileBaru);
    // var_dump($namaFileBaru); die;
    return $namaFileBaru;
}


// logika hapus data adalah ambil dulu id baru dimasukkan ke $id, setelah itu masukkan $id ke dalam parameter fungsi hapus, di fungsi hapus kita delete id yg terpilih menggunakan sql, lalu tampilkan affecterd rowsnya.
function hapus($id){
    global $conn_db;

    mysqli_query($conn_db, "DELETE FROM mahasiswa WHERE id = $id ");

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
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        // cek apakah user pilih gambar baru atau tidak
        if($_FILES["gambar"]["error"] == 4 ){
            $gambar = $gambarLama;
        }
        else{
            $gambar = upload();
        }

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

// ambil keyword yg ada pada  kolom search lalu transfer data ke functions cari dan dimasukan ke parameter $keyword.. setelah itu lakukan query seperti dibawah(masukkan keyword ke field nama/ nrp/ email/ atau jurusan) lalu simpan ke dalam $query, lalu $query dimasukkan ke dalam functions query, jdi data nya tersebut di proses di dalam functions query dan data yg sdh diproses dikembalikan dalam bentuk array rows ke dalam functions cari, seteelah itu function cari mengembalikannya lagi ke dalam $mahasiswa di index.php, dan karena sdh dikembalikan, maka isi $mahasiswa hanya tersisa 1 filed mahasiswa yg dicari keywordnya dan itu ditampilkan di table melalui perintah $row["id"](contohnya).
function cari($keyword) {
    $query = "SELECT * FROM mahasiswa 
                    WHERE
                    nama LIKE '%$keyword%' OR
                    nrp LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%'
                    ";
    return query($query);
}



?>