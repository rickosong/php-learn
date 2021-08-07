<?php 
$angka = [3, 6, 7,8];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    <style>
        .kotak {
            height: 50px;
            width: 50px;
            background-color: salmon;
            float: left;
            text-align: center;
            line-height: 50px;
            margin: 3px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear">

        <?php foreach($angka as $a ) { ?>
            <div class="kotak"><?php echo  ("$a"); ?></div>
        <?php } ?>

        <div class="clear"></div>

        <?php foreach($angka as $a) : ?>
            <div class="kotak"><?=("$a"); ?> </div>
        <?php endforeach; ?>
    </div>
</body>
</html>