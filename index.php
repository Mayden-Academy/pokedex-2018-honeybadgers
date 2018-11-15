<?php

require_once ('vendor/autoload.php');

use Pokedex\DbConnection;
use Pokedex\PokeList;

$db = new DbConnection();
$pokeList = new PokeList($db->getDB());

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
        <form>
            <ul id="scroll">
                <?php
                    foreach ($pokeList->getPokemon() as $pokemon) {
                        require 'pokemonEntryTemplate.phtml';
                    }
                ?>
            </ul>
            <input type="submit" value="Save" id="save">
        </form>
    </main>
</body>
</html>