<?php

require_once ('vendor/autoload.php');

use Pokedex\DbConnection;
use Pokedex\PokeList;

$search = '%%';

if(isset($_GET['search'])) {
    $search = '%' . $_GET['search'] . '%';
}

$db = new DbConnection();
$pokeList = new PokeList($db->getDB(), $search);

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
        <form action="index.php" class="nameSearch">
            <input type="search" name="search" placeholder="Search by name" class="search">
            <input type="submit" formmethod="get" value="Search" class="button search">
            <a href="index.php" class="button search">Reset search</a>
        </form>
        <form>
            <div id="scroll">
                <ul>
                    <?php
                        foreach ($pokeList->getPokemon() as $pokemon) {
                            require 'pokemonEntryTemplate.phtml';
                        }
                    ?>
                </ul>
            </div>
            <footer>
                <input type="submit" value="Save" id="save">
            </footer>
        </form>
    </main>
</body>
</html>