
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .kotak {
        height: 100px;
        width: 100px;
        float: left;
        line-height: 100px;
        margin: 5px;
        background-color: fuchsia;
        text-align: center;
        transition: 0.6s;
        font-size: 20px;
    }

    .kotak:hover {
        transform: rotate(360deg);
        background-color: black;
        color: white;
        border-radius: 150px;
        font-size: 40px;
    }

    .clear {
        clear: both;
    }
    
</style>
<body>
<?php 
$numbers = [
    [1, 2, 3], 
    [4, 5, 6], 
    [7, 8, 9],
];
// echo $numbers[2][2];
?>
<?php foreach($numbers as $number) : ?>
    <?php foreach($number as $nilai) : ?>
        <div class="kotak"><?php echo "$nilai" ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>

</body>
</html>