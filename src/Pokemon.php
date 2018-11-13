<?php

namespace Pokedex;

class Pokemon {

    private $id;
    private $name;
    private $types;

    public function __construct($id, $name, $types) {

        $this->id = $id;
        $this->name = $name;
        $this->types = $types;
    }

    public function __get($propertyName) {
        if (property_exists('Pokemon', $propertyName)) {
            return $this->$propertyName;
        }
        throw new \Exception('Property ' . $propertyName . '  does not exist on the Pokemon class');
    }



}