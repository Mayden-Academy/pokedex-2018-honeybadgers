<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 14/11/2018
 * Time: 11:48
 */

namespace Pokedex;

class PokeList {

    private $pokemon;

    /**
     * Creates a new pokeList using a DBConnection
     * @param \PDO $connection The particular database object to use for retrieving the list of pokemon.
     */
    public function __construct(\PDO $db)
    {
        $stmt = $db->prepare('SELECT `id`, `name`, `type_1`, `type_2` FROM `pokemon`');
        $stmt->execute();
        $this->pokemon = $stmt->fetchAll(\PDO::FETCH_CLASS, 'Pokedex\Pokemon');
    }

    /**
     * @return array Returns an array containing the pokemon.
     */
    public function getPokemon() : array
    {
        return $this->pokemon;
    }
}