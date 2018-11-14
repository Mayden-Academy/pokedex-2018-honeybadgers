<?php

namespace Pokedex;

class Pokemon {

    private $id;
    private $name;
    private $type_1;
    private $type_2;

    /**
     * @return int The pokemon's ID.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string The pokemon's name.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string The pokemon's first type.
     */
    public function getType1()
    {
        return $this->type_1;
    }

    /**
     * @return mixed The pokemon's second type.
     */
    public function getType2()
    {
        return $this->type_2;
    }
}