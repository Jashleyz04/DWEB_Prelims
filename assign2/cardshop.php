<?php
$BaseballStock = 20;
$PokemonStock = 15;
$BasketballStock = 0;
$YuGiOhStock = 5;

$prices = [
    "Baseball" => 5.00,
    "Pokemon" => 6.50,
    "Basketball" => 8.75,
    "YuGiOh" => 4.00
];

$unpopularCards = ["Digimon", "One Piece", "Magic the Gathering (Vintage)", "Naruto", "Dragon Ball", "SpongeBob", "Digimon"];

$day = 'Monday';

$offer = match ($day) {
    'Monday' => '20% off any trading card pack',
    'Tuesday' => 'No sale today',
    'Wednesday' => '10% off any trading card pack',
    'Thursday' => '5% off any trading card pack',
    'Friday' => '15% off any trading card pack',
    'Saturday', 'Sunday' => '25% off any trading card pack',
};

$stock  = $BaseballStock   > 0 ? $BaseballStock   : "Out of Stock!";
$stock1 = $PokemonStock    > 0 ? $PokemonStock    : "Out of Stock!";
$stock2 = $BasketballStock > 0 ? $BasketballStock : "Out of Stock!";
$stock3 = $YuGiOhStock     > 0 ? $YuGiOhStock     : "Out of Stock!";

$maxCardsPerBox = 10;
$maxBoxes = 10;
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

<header class="hero">
    <h1>Welcome to the Trading Card Collectible Store</h1>
    <img src="img/cardBanner.jpg" alt="Trading Card Banner" class="banner">
</header>

<main>
  <section class="card-gallery">
      <h2>Daily Deals Based on Today!</h2>
      <h3>Today is <?= $day ?> </h3>
      <h3>Special Offer: <?= $offer ?></h3>

      <div class="card-grid">

        <div class="card-item">
          <img src="img/baseball.avif" alt="Baseball Cards">
          <p>Baseball Card Pack</p>
          <strong>$5.00</strong>
        </div>

        <div class="card-item">
          <img src="img/pokemon.jfif" alt="Pokemon Cards">
          <p>Pokémon Booster Pack</p>
          <strong>$6.50</strong>
        </div>

        <div class="card-item">
          <img src="img/basketball.webp" alt="Basketball Cards">
          <p>Basketball Card Pack</p>
          <strong>$8.75</strong>
        </div>

        <div class="card-item">
          <img src="img/yugioh.webp" alt="Yu-Gi-Oh Cards">
          <p>Yu-Gi-Oh Booster Pack</p>
          <strong>$4.00</strong>
        </div>

      </div>
  </section>

  <section class="stock-section">
      <h2>Card Types & Stock Availability</h2>

      <table class="stock-table">
          <tr>
              <th>Card Type</th>
              <th>Description</th>
              <th>Stock</th>
              <th>Price</th>
          </tr>
          <tr>
              <td>Baseball Cards</td>
              <td>Classic MLB player cards including rookie & special edition inserts.</td>
              <td><?= $stock; ?></td>
              <td>$<?= $prices["Baseball"]; ?></td>
          </tr>
          <tr>
              <td>Pokémon Cards</td>
              <td>Pokémon booster packs with chances of holo or ultra-rare cards.</td>
              <td><?= $stock1; ?></td>
              <td>$<?= $prices["Pokemon"]; ?></td>
          </tr>
          <tr>
              <td>Basketball Cards</td>
              <td>NBA trading cards featuring rookies, parallels & rare pulls.</td>
              <td><?= $stock2; ?></td>
              <td>$<?= $prices["Basketball"]; ?></td>
          </tr>
          <tr>
              <td>Yu-Gi-Oh Cards</td>
              <td>Booster packs containing monsters, spells & limited-edition cards.</td>
              <td><?= $stock3; ?></td>
              <td>$<?= $prices["YuGiOh"]; ?></td>
          </tr>
      </table>

      <h3>Box Set Prices (10 Packs per Box)</h3>
      <table class="price-table">
          <tr>
              <th>Card Type</th>
              <?php
              for ($i = 1; $i <= $maxBoxes; $i++) {
                  echo "<th>$i Box" . ($i > 1 ? "es" : "") . "</th>";
              }
              ?>
          </tr>

          <?php
          foreach ($prices as $type => $pricePerPack) {
              echo "<tr>";
              echo "<td>$type Cards</td>";

              for ($box = 1; $box <= $maxBoxes; $box++) {
                  $totalPrice = $pricePerPack * $maxCardsPerBox * $box;
                  echo "<td>$" . number_format($totalPrice, 2) . "</td>";
              }

              echo "</tr>";
          }
          ?>
      </table>

      <h3>Coming Soon (Less Popular Card Lines)</h3>
      <ul class="unpopular-list">
        <?php foreach ($unpopularCards as $card): ?>
            <li><?= $card ?></li>
        <?php endforeach; ?>
      </ul>

  </section>
</main>

<?php include_once 'footer.php'; ?>

</body>
</html>
