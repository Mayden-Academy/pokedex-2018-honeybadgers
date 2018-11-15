<?php

namespace Pokedex;

class Pokemon
{

    private $id;
    private $name;
    private $type_1;
    private $type_2;
    private $seenCaught;


    public function __construct()
    {
        //capitalises first letter of each string for more a professional appearance
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
     * @return string The pokemon's second type.
     */
    public function getType2()
    {
        return $this->type_2;
    }

    /**
     * @return mixed The seen caught status.
     */
    public function getSeenCaught()
    {
        switch (TRUE) {
            case ($this->seenCaught === null);
            return $arr = [1,0,0];

            case ($this->seenCaught === 0);
            return $arr = [0,1,0];

            case ($this->seenCaught === 1);
            return $arr = [0,1,1];

        }
    }
}