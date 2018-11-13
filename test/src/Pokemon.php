<?php

require_once '../../src/Pokemon.php';
require_once '../../src/Exceptions/PokemonException.php';

use Pokedex\Pokemon;

use PHPUnit\Framework\TestCase;

class PokemonTest extends TestCase {

    public $pokemon;

    public function setUp() {

        $this->pokemon = new Pokemon(1, 'Bulbasaur', ['poison', 'grass']);
    }

    public function test_Pokemon_construct_success() {
        $this->assertNotEmpty($this->pokemon);
    }

    public function test_Pokemon_get_success() {
        $this->assertEquals($this->pokemon->name, 'Bulbasaur');
        $this->assertEquals($this->pokemon->id, 1);
        $this->assertContains('poison', $this->pokemon->types);
        $this->assertContains('grass', $this->pokemon->types);
    }

    public function test_Pokemon_get_fail() {
        $this->expectException(\Pokedex\Exceptions\PokemonException::class);
        $string = $this->pokemon->stuff;
    }
}