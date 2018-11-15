<?php

namespace Pokedex;

class Pokemon
{

    private $id;
    private $name;
    private $type_1;
    private $type_2;
    private $seen_caught;

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

    /**
     * @return array of the radio status.
     */
    public function getSeenCaught()
    {
        switch ($this->seen_caught) {
            case null:
                $arr = ['checked','',''];
                return $arr;
                break;
            case 0:
                $arr = ['','checked',''];
                return $arr;
                break;
            case 1:
                $arr = ['','','checked'];
                return $arr;
                break;
        }
    }

    /**
     * @return string gets class for status.
     */
    public function getStatusColor()
    {
        switch ($this->seen_caught) {
            case null:
                break;
            case 0:
                return 'seen';
                break;
            case 1:
                return 'caught';
                break;
        }
    }
}

