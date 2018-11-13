<?php

namespace Pokedex;

use Pokedex\Exceptions\PokemonException;

class Pokemon {

    private $id;
    private $name;
    private $types;

    public function __construct($id, $name, $types) {

        if(!is_int($id)) {
            throw new PokemonException('expected integer in $id parameter, given ' . gettype($id) . ' instead.');
        }
        $this->id = $id;
        $this->name = $name;
        if (!is_array($types)) {
            throw new PokemonException('expected array in $types parameter, given ' . gettype($types) . ' instead.');
        }
        $this->types = $types;
    }

    public function __get($propertyName) {
        if (property_exists('\\Pokedex\\Pokemon', $propertyName)) {
            return $this->$propertyName;
        }
        throw new PokemonException('Property ' . $propertyName . '  does not exist on the Pokemon class');
    }
}