<?php

class pokemonTableUpdate
{
    private $db;
    private $pokemonJSONs;

    /**
     * pokemonTableUpdate constructor.  Opens pokedex db connection
     * @param array $pokemonJSONs contains a JSON for each pokemon
     */
    public function __construct(array $pokemonJSONs)
    {
        $this->db = new PDO('mysql:dbname=pokedex;host=127.0.0.1', 'root');
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pokemonJSONs = $pokemonJSONs;
    }

    /**
     * Adds relevant values from each JSON to pokemon table in db
     */
    public function dbUpdate()
    {
        foreach ($this->pokemonJSONs as $JSON) {
            $id = $JSON->id;
            $name = $JSON->name;
            $type_1 = $JSON->types[0]->type->name;
            $type_2 = $JSON->types[1]->type->name;
            $query = $this->db->prepare('INSERT INTO pokemon VALUES (:id, :name, :type_1, :type_2);');
            $query->execute([':id' => $id, ':name' => $name, ':type_1' => $type_1, ':type_2' => $type_2]);
        }
    }
}