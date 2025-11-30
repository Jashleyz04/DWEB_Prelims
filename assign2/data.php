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
