<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 14/11/2018
 * Time: 11:48
 */

namespace Pokedex;

use Pokedex\DbConnection;

class PokeList {

    private $list;

    /**
     * Creates a new pokeList using a DBConnection
     * @param \Pokedex\DbConnection $connection The particular connection to use for retrieving the list of pokemon.
     */
    public function __construct(DbConnection $connection) {
        $stmt = $connection->getDB()->prepare('SELECT `id`, `name`, `type_1`, `type_2` FROM `pokemon`');
        $stmt->execute();
        $this->list = $stmt->fetchAll(\PDO::FETCH_CLASS, 'Pokedex\Pokemon');
    }

    /**
     * @return array Returns an array containing the pokemon.
     */
    public function getPokemon() : array {
        return $this->list;
    }
}