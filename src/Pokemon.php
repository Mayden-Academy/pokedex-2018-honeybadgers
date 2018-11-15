<?php

namespace Pokedex;

class Pokemon
{

    private $id;
    private $name;
    private $type_1;
    private $type_2;

/**
 *  Function constructs the class with setting name, type_1, type_2 properties,
 * and capitalises first letter of each property.
 */
    public function __construct()
    {
        $this->name = ucfirst($this->name);
        $this->type_1 = ucfirst($this->type_1);
        $this->type_2 = ucfirst($this->type_2);
    }

    /**
     * @return int The pokemon's ID.
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string The pokemon's name.
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string The pokemon's first type.
     */
    public function getType1() : string
    {
        return $this->type_1;
    }

    /**
     * @return string The pokemon's second type.
     */
    public function getType2() : string
    {
        return $this->type_2;
    }
}