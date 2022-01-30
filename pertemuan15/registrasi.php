<?php 
require "functions.php";


if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        Echo "<script> alert('Registrasi Berhasil!')  </script>";
    }
    else {
        echo mysqli_error($conn_db);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>
        <label for="password">Konfirmasi Password:</label><br>
        <input type="password" name="password2" id="password"><br><br>
        <button type="submit" name="register">Register</button>
    </form>
</body>
</html>