<?php

require_once 'src/apiPull.php';
require_once 'src/PokemonTableUpdate.php';

define('IP_ADDRESS', '192.168.20.20');

$apiPull = new apiPull();
$tableUpdate = new PokemonTableUpdate($apiPull->getPokemonDataList(), IP_ADDRESS);
$tableUpdate->dbUpdate();