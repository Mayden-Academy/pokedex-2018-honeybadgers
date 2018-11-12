<?php

require_once 'src/apiPull.php';

$test = new apiPull();
var_dump($test->getPokemonJSONs());