<?php

require_once 'src/apiPull.php';
require_once 'src/pokemonTableUpdate.php';

$apiPull = new apiPull();
$tableUpdate = new pokemonTableUpdate($apiPull->getPokemonDataList(), '192.168.20.20');
$tableUpdate->dbUpdate();