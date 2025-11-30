<?php
include_once 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upcoming Cards | CardCollect</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include_once 'nav.php'; ?>

<header class="hero">
    <h1>Upcoming Card Lines</h1>
    <p>These card series are planned for future release!</p>
</header>

<main>
    <section>
        <h2>Coming Soon</h2>

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
