<?php
$day = 'Friday';

switch ($day){
    case 'Friday':
        $offer = 'Black Friday Sale! Up to 80% off on all items!';
        break;
    case 'Tuesday':
        $offer = 'Taco Tuesday Offer! Buy 1 Shoe Get 1 Shirt Free!';
        break;
    default:
        $offer = 'Buy Three Shoes, get one shirt free!';
}
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
        <h2>Offers on <?= $day; ?></h2>
        <p><?= $offer ?></p>
        <img src = "img/nsale.png" width = "500">
    </body> 
<?php include "footer.php" ?>
</html>