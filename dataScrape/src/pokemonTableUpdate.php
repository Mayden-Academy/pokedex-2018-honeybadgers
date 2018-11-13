<?php

class pokemonTableUpdate
{
    private $db;
    private $pokemonDataList;

    /**
     * pokemonTableUpdate constructor.  Opens pokedex db connection
     *
     * @param array $pokemonDataList contains an array for each pokemon
     */
    public function __construct(array $pokemonDataList)
    {
        $this->db = new PDO('mysql:dbname=pokedex_hb;host=127.0.0.1', 'root');
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pokemonDataList = $pokemonDataList;
    }

    /**
     * Adds values from each array to pokemon table in db
     */
    public function dbUpdate()
    {
        foreach ($this->pokemonDataList as $pokemonData) {
            $id = $pokemonData['id'];
            $name = $pokemonData['name'];
            $type_1 = $pokemonData['type_1'];
            $type_2 = $pokemonData['type_2'];
            $query = $this->db->prepare('INSERT INTO pokemon VALUES (:id, :name, :type_1, :type_2);');
            $query->execute([
                ':id' => $id,
                ':name' => $name,
                ':type_1' => $type_1,
                ':type_2' => $type_2
            ]);
        }
    }
}