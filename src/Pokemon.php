<?php

namespace Pokedex;

class Pokemon
{

    private $id;
    private $name;
    private $type_1;
    private $type_2;


    public function __construct()
    {
        //capitalises first letter of each string, because it being lowercase looks wroooong
        $this->name = ucfirst($this->name);
        $this->type_1 = ucfirst($this->type_1);
        $this->type_2 = ucfirst($this->type_2);
    }

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