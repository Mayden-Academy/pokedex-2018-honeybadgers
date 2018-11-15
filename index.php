<?php

session_start();

if (!$_SESSION['loggedIn']) {
    header('Location:login.php');
}

require_once ('vendor/autoload.php');

use Pokedex\DbConnection;
use Pokedex\PokeList;

$userID = (int)$_SESSION['id'];

$dbConnection = new DbConnection();
$pokeList = new PokeList($dbConnection->getDB(), $userID);

if (!empty($_POST)) {
    foreach ($_POST as $query => $status) {
        $pokemonID = (int)explode('_', $query)[1];
        $status = ($status == '' ? NULL : $status);
        updatePokemonStatus($dbConnection->getDB(), $userID, $pokemonID, $status);
    }
}

function updatePokemonStatus(PDO $db, int $userID, int $pokemonID, $status) {
    $sql = 'INSERT INTO status (user_id, pokemon_id, seen_caught) VALUES (:user_id, :pokemon_id, :seen_caught)
                    ON DUPLICATE KEY UPDATE `seen_caught` = :seen_caught';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':user_id',$userID);
    $stmt->bindParam(':pokemon_id',$pokemonID);
    $stmt->bindParam(':seen_caught',$status);
    try {
        $stmt->execute();
    } catch (PDOException $e) {
        throw $e;
    }
}

$db = new DbConnection();
$pokeList = new PokeList($db->getDB(), $_SESSION['id']);
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
    <form method="post">
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