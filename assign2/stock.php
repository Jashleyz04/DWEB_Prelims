<?php
include_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stock | CardCollect</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include_once 'nav.php'; ?>

<header class="hero">
    <h1>Card Stock Levels</h1>
    <p>Check availability for all card categories.</p>
</header>

<main>
    <section class="stock-section">
        <h2>Current Stock</h2>

        <table class="stock-table">
            <tr>
                <th>Card Category</th>
                <th>Description</th>
                <th>Stock</th>
                <th>Price</th>
            </tr>

            <tr>
                <td>Baseball Cards</td>
                <td>MLB trading cards including rookies and rare inserts.</td>
                <td><?= $stock; ?></td>
                <td>$<?= $prices["Baseball"]; ?></td>
            </tr>

            <tr>
                <td>Pokémon Cards</td>
                <td>Booster packs with chances for holo and ultra rare Pokémon.</td>
                <td><?= $stock1; ?></td>
                <td>$<?= $prices["Pokemon"]; ?></td>
            </tr>

            <tr>
                <td>Basketball Cards</td>
                <td>NBA player cards, parallels, and special editions.</td>
                <td><?= $stock2; ?></td>
                <td>$<?= $prices["Basketball"]; ?></td>
            </tr>

            <tr>
                <td>Yu-Gi-Oh Cards</td>
                <td>Spell, trap & monster boosters for collectors & duelists.</td>
                <td><?= $stock3; ?></td>
                <td>$<?= $prices["YuGiOh"]; ?></td>
            </tr>
        </table>
    </section>
</main>

<?php include_once 'footer.php'; ?>
</body>
</html>
