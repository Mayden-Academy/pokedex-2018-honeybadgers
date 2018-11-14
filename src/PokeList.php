<?php

namespace Pokedex;

class PokeList {

    private $list;

    /**
     * Creates a new pokeList using a DBConnection
     * @param \PDO $connection The particular database object to use for retrieving the list of pokemon.
     */
    public function __construct(\PDO $connection, string $searchTerm = '%%')
    {
        $stmt = $connection->prepare("SELECT `id`, `name`, `type_1`, `type_2` FROM `pokemon` WHERE `name` LIKE :search");
        $stmt->bindParam(":search", $searchTerm);
        $stmt->execute();
        $this->list = $stmt->fetchAll(\PDO::FETCH_CLASS, 'Pokedex\Pokemon');
    }

    /**
     * @return array Returns an array containing the pokemon.
     */
    public function getPokemon() : array
    {
        return $this->list;
    }
}