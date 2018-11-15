<?php

require_once ('vendor/autoload.php');

use Pokedex\DbConnection;
use Pokedex\PokeList;

$db = new DbConnection();
$pokeList = new PokeList($db->getDB());

session_start();

if (!$_SESSION['loggedIn']) {
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Cantarell:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Pokédex</title>
</head>
<body>
    <main>
        <ul id="scroll">
            <?php
                foreach ($pokeList->getPokemon() as $pokemon) {
                    require 'pokemonEntryTemplate.phtml';
                }
            ?>
        </ul>
    </main>
</body>
</html>