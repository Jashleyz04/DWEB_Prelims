<!DOCTYPE html>
<html>
    <head>
        <?php include "nav.php"?>
        <meta charset="utf-8">
        <meta name ="viewport" content = "width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "css/styles.css"/>  
    </head>
    <body>
    </body> 
</html>

<?php
$counter = 1;
$packs = 5;
$price = 1.99;
?>

<h2>Prices For NBA card packs</h2>
<p>
    <?php
    while($counter <= $packs){
        echo $counter;
        echo ' packs cost $';
        echo $price * $counter;
        echo '<br>';
        $counter++;
    }
    ?>
</p>

<img src = "img/nbacards.webp" height = "500" width = "700">
<?php include "footer.php" ?>