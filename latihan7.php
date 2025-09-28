<?php
// Pengulangan pada array
// for / foreach
$angka = [3,4,5,6,1,3,5,6,6,5,3,7,3,5]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
    <style>
        /* * {
            margin: 0;
            padding: 0;
        } */
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            display: inline-block;
        }
    </style>
</head>
<body>
        <!-- ini pakai for -->
         <?php for($i = 0; $i < count($angka) ; $i++ ) : ?>
            <div><?= $angka[$i]; ?></div>
            <?php endfor ; ?>

    <!-- ini pakai foreach -->
    <!-- <?php foreach($angka as $a) : ?>
    <div><?= $a ?></div>
    <?php endforeach; ?> -->
</body>
</html>