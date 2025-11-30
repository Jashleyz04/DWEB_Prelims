<?php
include_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Box Pricing | CardCollect</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include_once 'nav.php'; ?>

<header class="hero">
    <h1>Box Pricing</h1>
    <p>Buy multi-pack boxes for better value!</p>
</header>

<main>
    <section>
        <h2>Box Set Prices (10 Packs per Box)</h2>

        <table class="price-table">
            <tr>
                <th>Card Type</th>
                <?php for ($box = 1; $box <= $maxBoxes; $box++): ?>
                    <th><?= $box ?> Box<?= $box > 1 ? "es" : "" ?></th>
                <?php endfor; ?>
            </tr>

            <?php foreach ($prices as $type => $pricePerPack): ?>
                <tr>
                    <td><?= $type ?> Cards</td>

                    <?php for ($box = 1; $box <= $maxBoxes; $box++): 
                        $totalPrice = $pricePerPack * $maxCardsPerBox * $box;
                    ?>
                        <td>$<?= number_format($totalPrice, 2); ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>

<?php include_once 'footer.php'; ?>
</body>
</html>
