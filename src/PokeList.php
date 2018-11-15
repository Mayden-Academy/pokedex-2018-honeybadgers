<?php


namespace Pokedex;

class PokeList {

    private $pokemon;

    /**
     * Creates a new pokeList using a DBConnection
     * @param \PDO $connection The particular database object to use for retrieving the list of pokemon.
     */
    public function __construct(\PDO $db, int $userId)
    {
        //$stmt = $db->prepare('SELECT `id`, `name`, `type_1`, `type_2` FROM `pokemon`');
        $stmt = $db->prepare('
          SELECT `pokemon`.`id`, `pokemon`.`name`, `pokemon`.`type_1`, `pokemon`.`type_2`, `new_status_table`.`seen_caught` 
          FROM `pokemon` 
          LEFT JOIN (SELECT `pokemon_id`, `seen_caught` 
          FROM `status` 
          WHERE `user_id` = ?) 
          AS new_status_table ON `pokemon`.`id` = `new_status_table`.`pokemon_id`;');
        $stmt->execute([$userId]);
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