<?php
declare(strict_types=1);                     
$cardstore = [
    // Main Packs
    "Baseball Card Pack"           => ["price" => 5.00,  "stock" => 20],
    "Pokémon Booster Pack"         => ["price" => 6.50,  "stock" => 15],
    "Basketball Card Pack"         => ["price" => 8.75,  "stock" => 0],
    "Yu-Gi-Oh Booster Pack"        => ["price" => 4.00,  "stock" => 5],

    // Upcoming Packs
    "Digimon Card Pack"            => ["price" => 3.50,  "stock" => 12],
    "One Piece Card Pack"          => ["price" => 4.75,  "stock" => 18],
    "Magic the Gathering Vintage"  => ["price" => 12.00, "stock" => 4],
    "Naruto Card Pack"             => ["price" => 3.00,  "stock" => 10],
    "Dragon Ball Card Pack"        => ["price" => 4.25,  "stock" => 9],
    "SpongeBob Card Pack"          => ["price" => 2.75,  "stock" => 14]
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $tax = 0): float {
    return ($price * $qty) * ($tax / 100);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trading Card Collectible Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include_once 'nav.php'; ?>
<h1>Trading Card Collectible Store</h1>
<h2>Stock Control Dashboard</h2>
<table class="stock-table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Stock</th>
            <th>Re-order</th>
            <th>Total Value</th>
            <th>Tax Due</th>
        </tr>
    </thead>
<?php foreach ($cardstore as $product_name => $data) { ?>
    <tr>
        <td><?= $product_name ?></td>
        <td><?= $data['stock'] ?></td>
        <td><?= get_reorder_message($data['stock']) ?></td>
        <td>PHP<?= get_total_value($data['price'], $data['stock']) ?></td>
        <td>PHP<?= get_tax_due($data['price'], $data['stock'], $tax_rate) ?></td>
    </tr>
<?php } ?>
</table>
<?php include_once 'footer.php'; ?>
</body>
</html>
