<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 15/11/2018
 * Time: 11:37
 */

namespace Pokedex;


use Pokedex\Exceptions\PokeUpdateException;

class PokeUpdate
{

    private $userID;
    private $pokemonID;
    private $status;

    public function __construct()
    {
        if(!is_int($this->userID)) {
            throw new PokeUpdateException('User ID is not an integer.');
        }
        if(!is_int($this->pokemonID)) {
            throw new PokeUpdateException('Pokemon ID is not an integer.');
        }
        if($this->validateStatus() === 'ERROR') {
            throw new PokeUpdateException('Pokemon status is not in an accepted format.');
        }
    }


    /**
     * @return int The user's ID.
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @return int The pokemon's ID.
     */
    public function getPokemonID()
    {
        return $this->pokemonID;
    }

    /**
     * @return mixed The new status to assign to the pokemon for this user.
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function validateStatus($status)
    {
        switch ($status) {
            case 'unseen': return NULL;
            case 'seen': return 0;
            case 'caught': return 1;
            default: return 'ERROR';
        }
    }

}