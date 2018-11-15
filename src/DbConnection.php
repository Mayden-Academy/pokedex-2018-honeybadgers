<?php
namespace Pokedex;
use \PDO;


class DbConnection
{
    private $db;
    /**
     * DbConnection constructor creates new connection to the pokedex_hb database
     */
    public function __construct()
    {
        $this->db =  new PDO('mysql:dbname=pokedex_hb;host=127.0.0.1','root');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * Function to get the $db property
     * @return PDO connection to pokedex_hb database
     */
    public function getDB() : PDO
    {
        return $this->db;
    }
}