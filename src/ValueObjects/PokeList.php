<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 14/11/2018
 * Time: 11:48
 */

namespace Pokedex\ValueObjects;

use Pokedex\DbConnection;

class PokeList {

    private $pokelist;

    public function __construct(DbConnection $connection) {
        $stmt = $connection->getDB()->prepare('SELECT `id`, `name`, `type_1`, `type_2` FROM `pokemon`');
        $stmt->execute();
        $pokeresults = $stmt->fetchAll();
        foreach ($pokeresults as $pokeentry) {
            $this->pokelist[] = new \Pokedex\Pokemon($pokeentry['id'], $pokeentry['name'], [$pokeentry['type_1'], $pokeentry['type_2']]);
        }
    }

    /**
     * @return array Returns an array containing the pokemon.
     */
    public function getPokemon() : array {
        return $this->pokelist;
    }
}