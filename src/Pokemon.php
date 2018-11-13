<?php

namespace Pokedex;

use Pokedex\Exceptions\PokemonException;

class Pokemon {

    private $id;
    private $name;
    private $types;

    /**
     * This constructs a single pokemon instance and sets the properties accordingly.
     *
     * @param int $id The pokemon's id.
     * @param string $name The pokemon's name.
     * @param array $types $types The pokemon's types.
     *
     */
    public function __construct(int $id, string $name, array $types) {

        $this->id = $id;
        $this->name = $name;
        $this->types = $types;
    }

    /**
     * @param string $propertyName The property the caller is trying to access.
     * @return mixed the value belonging to the given property.
     * @throws PokemonException if the property does not exist on the class.
     */
    public function __get($propertyName) {
        if (property_exists('\\Pokedex\\Pokemon', $propertyName)) {
            return $this->$propertyName;
        }
        throw new PokemonException('Property ' . $propertyName . '  does not exist on the Pokemon class');
    }
}