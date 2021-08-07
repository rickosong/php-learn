<?php 
    function salam($waktu = 'datang', $nama = 'admin' ) {
        return "selamat $waktu, $nama";
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    <h1><?php echo salam() ?> </h1>
    <h2><?php echo salam('pagi', 'Ricko') ?></h2>
</body>
</html>