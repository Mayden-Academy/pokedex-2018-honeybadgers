<?php
namespace Pokedex;
use \PDO;


class DbConnection
{
    private $db;

    public function __construct()
    {
        $this->db =  new PDO('mysql:dbname=pokedex_hb;host=127.0.0.1','root');
    }

    public function getDB() {
        return $this->db;
    }
}