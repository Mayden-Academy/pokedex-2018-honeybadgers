<?php

require_once 'src/apiPull.php';
require_once 'src/pokemonTableUpdate.php';

define('IP_ADDRESS', '192.168.20.20');

$apiPull = new apiPull();
$tableUpdate = new pokemonTableUpdate($apiPull->getPokemonDataList(), IP_ADDRESS);
$tableUpdate->dbUpdate();