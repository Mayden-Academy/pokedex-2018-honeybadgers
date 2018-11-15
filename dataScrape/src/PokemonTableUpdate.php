<?php

class PokemonTableUpdate
{
    private $db;
    private $pokemonDataList;

    /**
     * PokemonTableUpdate constructor.  Opens pokedex db connection
     *
     * @param array $pokemonDataList contains an array for each pokemon
     * @param string $dbServerIP is the IP address of the database server
     */
    public function __construct(array $pokemonDataList, string $dbServerIP)
    {
        $this->db = new PDO('mysql:dbname=pokedex_hb;host=' . $dbServerIP, 'root');
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pokemonDataList = $pokemonDataList;
    }

    /**
     * Adds values from each array to pokemon table in db
     */
    public function dbUpdate()
    {
        foreach ($this->pokemonDataList as $pokemonData) {
            $query = $this->db->prepare('INSERT INTO pokemon VALUES (:id, :name, :type_1, :type_2);');
            $query->execute($pokemonData);
        }
    }
}