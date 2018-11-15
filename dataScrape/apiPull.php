<?php

require_once 'src/ApiPull.php';
require_once 'src/PokemonTableUpdate.php';

define('IP_ADDRESS', '192.168.20.20');

$apiPull = new ApiPull();
$tableUpdate = new PokemonTableUpdate($apiPull->getPokemonDataList(), IP_ADDRESS);
$tableUpdate->dbUpdate();