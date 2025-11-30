<?php
include_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Card Packs | CardCollect</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include_once 'nav.php'; ?>

<header class="hero">
    <h1>Trading Card Packs</h1>
    <p>Select from our wide variety of collectible card packs.</p>
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
</main>

<?php include_once 'footer.php'; ?>
</body>
</html>
