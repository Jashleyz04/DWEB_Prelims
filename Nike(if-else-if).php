<?php
$stock = 5;
$stock1 = 0;
$stock2 = 5;
$stock3 = 3;

if ($stock > 5){
    $message = 'In stock';
} else {
    $message = 'Sold out';
}

if ($stock > 0){
    $message1 = 'In stock';
} else {
    $message1 = 'Sold out';
}

if ($stock > 5){
    $message2 = 'In stock';
} else {
    $message2 = 'Sold out';
}

if ($stock > 3){
    $message3 = 'In stock';
} else {
    $message3 = 'Sold out';
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
        <h2>=Shoes=</h2>
        <p><?= $message ?></p>
        <h2>=Shirts=</h2>
        <p><?= $message1 ?></p>
        <h2>=Jerseys=</h2>
        <p><?= $message2 ?></p>
        <h2>=Caps=</h2>
        <p><?= $message3 ?></p>
    </body>
<?php include "footer.php" ?>
</html>