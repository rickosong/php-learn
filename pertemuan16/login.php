<?php
session_start();
// cek jika sudah login maka arahkan ke index
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


require 'functions.php'; 

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn_db, "SELECT * FROM users where username = '$username'");
    
    // cek username
    if (mysqli_num_rows($result) == 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            // set session
            $_SESSION["login"] = true;
            
            // arahkan ke halaman index
            header("Location: index.php");
            exit;
        } 
        // else { 
        //     echo "<script> alert('username atau password yang anda masukkan salah') </script>";
        // } bisa dengan menggunakan else seperti ini, tapi aku ingin menampilkan pesan kesalahannya di html
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Form Login</h1>

    <?php if (isset($error)) : ?>
        <p style="color:red;">username atau password yang anda masukkan salah</p>
    <?php endif ?>

    <form action="" method="post">
    <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>