<?php

namespace Pokedex;

class Pokemon
{

    private $id;
    private $name;
    private $type_1;
    private $type_2;
    private $seen_caught;


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
        return $this->seen_caught;
    }

    /**
     * @return string gets class for status.
     */
    public function getStatusColor()
    {
        switch (TRUE) {

            case ($this->seen_caught === 0);
            return $statusColor = 'seen';

            case ($this->seen_caught === 1);
            return $statusColor = 'caught';
        }
    }

}