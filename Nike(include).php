<?php
$products = [
    'PANINI OBSIDIAN BOX' => 299.45,
    'PANINI PRIZM BOX'  => 150.00,
    'PANINI IMMACULATE BOX'  => 2499.95,
];
?>


<!DOCTYPE html>
<html>
    <head>
        <?php include "nav.php"?>
        <meta charset="utf-8">
        <meta name ="viewport" content = "width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "css/styles.css"/> 
    </head>
<body>
    <h2>Price List of NBA Packs</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
<?php foreach ($products as $item => $price) { ?>
        <tr>
            <td><?= $item ?></td>
            <td>$<?= $price ?></td>
        </tr>
<?php } ?>
    </table>
</body>
<img src = "img/BOX1.png" height="500" width = "700">
<img src = "img/BOX2.png" height="500" width = "350">
<?php include "footer.php" ?>
</html>