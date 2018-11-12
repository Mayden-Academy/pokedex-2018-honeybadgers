<?php

require_once 'src/apiPull.php';
require_once 'src/pokemonTableUpdate.php';

$test = new apiPull();
$test2 = new pokemonTableUpdate($test->getPokemonJSONs());
$test2->dbUpdate();